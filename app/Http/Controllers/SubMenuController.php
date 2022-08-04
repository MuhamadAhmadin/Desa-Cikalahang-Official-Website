<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Page;
use App\Models\SubMenu;
use Illuminate\Http\Request;

class SubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => env('APP_NAME') . ' | List SubMenu',
            'sub_menu' => SubMenu::with(['menu'])->get()
        ];

        return view('dashboard.sub_menu.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => env('APP_NAME') . ' | Tambah Sub Menu',
            'menu' => Menu::all(),
            'pages' => Page::all()
        ];

        return view('dashboard.sub_menu.create', $data);
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
            'nama' => ['required', 'string', 'max:255'],
            'link' => ['nullable', 'string'],
            'menu_id' => ['nullable'],
        ]);

        $SubMenu = new SubMenu();
        $SubMenu->nama = htmlspecialchars($request->nama);
        if ($request->tipe_menu == 'page') {
            $SubMenu->page_id = $request->page_id;
            $SubMenu->link = NULL;
        } else {
            $SubMenu->page_id = NULL;
            $SubMenu->link = $request->link;
        }
        $SubMenu->menu_id = $request->menu_id;
        $SubMenu->visible = isset($request->visible) ? $request->visible : 0;
        $SubMenu->urutan = isset($request->urutan) ? $request->urutan : 0;
        $SubMenu->save();

        return redirect()->back()->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubMenu  $SubMenu
     * @return \Illuminate\Http\Response
     */
    public function show(SubMenu $SubMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubMenu  $SubMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(SubMenu $SubMenu)
    {
        $data = [
            'title' => env('APP_NAME') . '| Edit SubMenu',
            'sub_menu' => $SubMenu,
            'menu' => Menu::all(),
            'pages' => Page::all()
        ];

        return view('dashboard.sub_menu.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubMenu  $SubMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubMenu $SubMenu)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'link' => ['nullable', 'string'],
            'page_id' => ['nullable'],
            'menu_id' => ['nullable'],
        ]);

        $SubMenu->nama = htmlspecialchars($request->nama);
        $SubMenu->menu_id = $request->menu_id;
        if ($request->tipe_menu == 'page') {
            $SubMenu->page_id = $request->page_id;
            $SubMenu->link = NULL;
        } else {
            $SubMenu->page_id = NULL;
            $SubMenu->link = $request->link;
        }
        $SubMenu->visible = isset($request->visible) ? $request->visible : 0;
        $SubMenu->urutan = isset($request->urutan) ? $request->urutan : 0;
        $SubMenu->save();

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubMenu  $SubMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubMenu $SubMenu)
    {
        $SubMenu->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data.');
    }
}
