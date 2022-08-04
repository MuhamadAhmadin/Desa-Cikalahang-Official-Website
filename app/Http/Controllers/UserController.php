<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $draw = $request->get('draw');
            $start = $request->get("start");
            $rowperpage = $request->get("length");

            $columnIndex_arr = $request->get('order');
            $columnName_arr = $request->get('columns');
            $order_arr = $request->get('order');
            $search_arr = $request->get('search');

            $columnIndex = $columnIndex_arr[0]['column'];
            $columnName = $columnName_arr[$columnIndex]['data'];
            $columnSortOrder = $order_arr[0]['dir'];
            $searchValue = $search_arr['value'];

            $totalRecords = User::select('count(*) as allcount')->where('role', '!=', 'admin')->count();
            $totalRecordswithFilter = User::where(function ($query) use ($searchValue) {
                $query->orWhere('name', 'like', '%' . $searchValue . '%');
                $query->orWhere('username', 'like', '%' . $searchValue . '%');
            })->where('role', '!=', 'admin')->count();

            $records = User::orderBy($columnName, $columnSortOrder)
                ->where(function ($query) use ($searchValue) {
                    $query->orWhere('name', 'like', '%' . $searchValue . '%');
                    $query->orWhere('username', 'like', '%' . $searchValue . '%');
                })
                ->where('role', '!=', 'admin')
                ->skip($start)
                ->take($rowperpage)
                ->get();

            $data_arr = array();

            foreach ($records as $key => $record) {
                $route_edit = route('dashboard.user.edit', $record->id);
                $route_delete = route('dashboard.user.destroy', $record->id);
                $increment = $start + 1 + $key;

                if ($columnSortOrder === 'desc') {
                    $increment = $totalRecordswithFilter - $start - $key;
                }

                $aksi = '
                    <div class="d-flex justify-content-between">
                        <a href=' . $route_edit . ' class="btn btn-sm btn-warning">Edit</a>
                        <form class="ml-2" action="' . $route_delete . '" method="post">
                            <input type="hidden" name="_token" value="' . csrf_token() . '" />
                            <input type="hidden" name="_method" value="DELETE" />
                            <button class="btn btn-sm btn-danger buttonDeletion" type="Submit">
                                Hapus
                            </button>
                        </form>
                    </div>
                ';

                $username = $record->username;

                switch ($record->role) {
                    case 'admin':
                        $role = '<span class="badge badge-info">Administrator</span>';
                        break;
                    case 'staff':
                        $role = '<span class="badge badge-warning">Staff Web</span>';
                        break;
                    case 'user':
                        $role = '<span class="badge badge-warning">User</span>';
                        break;
                    default:
                        $role = '<span class="badge badge-info">Akun</span>';
                }

                $data_arr[] = array(
                    "id" => $increment,
                    "username" => $username,
                    "name" => $record->name,
                    "role" => $role,
                    "aksi" => $aksi
                );
            }

            $response = array(
                "draw" => intval($draw),
                "iTotalRecords" => $totalRecords,
                "iTotalDisplayRecords" => $totalRecordswithFilter,
                "aaData" => $data_arr
            );

            return response()->json($response);
        }

        $data = [
            'title' => env('APP_NAME') . '| List Petugas'
        ];

        return view('dashboard.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create', [
            'title' => env('APP_NAME') . ' | Tambah Akun',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'unique:users,username'],
            'name' => ['required', 'string'],
            'password' => ['required'],
        ]);

        // $request->request->add(['role' => 'admin']);
        $request->merge(['password' => Hash::make($request->password)]);

        try {
            $user = new User();
            $user->name = $request->name;
            $user->password = $request->password;
            $user->username = $request->username;
            $user->role = $request->role;
            $user->save();

            return redirect()->back()->with([
                'success' => 'Berhasil menambah User.'
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with([
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.user.edit', [
            'title' => env('APP_NAME') . ' | Edit Akun',
            'user' => $user,
        ]);
    }

    /**
     * My Profile page
     */
    public function profile()
    {
        $data = [
            'title' => env('APP_NAME') . '| Profile',
            'user' => Auth::user()
        ];

        return view('dashboard.user.profile', $data);
    }

    /**
     * Update user
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => ['required', 'string', 'unique:users,username,' .$id],
            'name' => ['required', 'string'],
            'password' => ['nullable'],
        ]);

        $user = User::find($id);

        $user->name = htmlspecialchars($request->name);
        $user->email = htmlspecialchars($request->email);
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->back()->with('success', 'Berhasil mengubah profile');
    }

    /**
     * My Profile update
     */
    public function profile_update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:128'],
            'email' => ['required', 'email', 'unique:users,email,' . Auth::user()->id],
        ]);

        $user = User::find(Auth::user()->id);

        $user->name = htmlspecialchars($request->name);
        $user->email = htmlspecialchars($request->email);
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->back()->with('success', 'Berhasil mengubah profile');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data.');
    }
}
