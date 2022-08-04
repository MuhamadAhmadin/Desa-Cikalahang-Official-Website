<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($filter = '')
    {
        $Berita = Berita::with(['kategori'])->orderBy('id', 'DESC')->get();
        $data = [
            'title' => env('APP_NAME') . ' | List Berita',
            'berita' => $Berita,
            'kategori_berita' => ''
        ];
        return view('dashboard.berita.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => env('APP_NAME') . ' | Tambah Berita',
            'kategori' => Kategori::all(),
        ];

        return view('dashboard.berita.create', $data);
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
            'judul' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable'],
            'thumbnail' => ['nullable', 'file', 'mimes:jpg,jpeg,png,bmp', 'between:0,4048'],
            'kategori_id' => ['required'],
        ]);


        $Berita = new Berita();
        $Berita->judul = $request->judul;
        $Berita->slug = Str::slug($request->judul, '-');
        $Berita->deskripsi = $request->deskripsi ?? '-';
        $Berita->kategori_id = (isset($request->kategori_id)) ? $request->kategori_id : 0;
        $Berita->visible =  isset($request->visible) ? 1 : 0;
        if ($request->hasFile('thumbnail')) {
            $filename = Str::random(32) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $thumbnail_path = $request->file('thumbnail')->storeAs('public/uploads', $filename);
            $Berita->thumbnail = $request->file('thumbnail')->getClientOriginalName();
            $Berita->thumbnail = isset($thumbnail_path) ? $thumbnail_path : '';
        }
        $Berita->user_id = Auth::user()->id;
        $Berita->save();

        return redirect()->back()->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $Berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $Berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $Berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => env('APP_NAME') . '| Edit Berita',
            'berita' => Berita::findOrFail($id),
            'kategori' => Kategori::all(),
        ];

        return view('dashboard.berita.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $Berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'keterangan' => ['nullable'],
            'kategori_id' => ['required'],
            'thumbnail' => ['nullable', 'file', 'mimes:jpg,jpeg,png,bmp', 'between:0,4048']
        ]);

        $Berita = Berita::findOrFail($id);
        $Berita->judul = $request->judul;
        $Berita->slug = Str::slug($request->judul, '-');
        $Berita->deskripsi = $request->deskripsi ?? '-';
        $Berita->kategori_id = (isset($request->kategori_id)) ? $request->kategori_id : 0;
        $Berita->visible =  isset($request->visible) ? 1 : 0;

        if ($request->hasFile('thumbnail')) {
            $filename = Str::random(32) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $thumbnail_path = $request->file('thumbnail')->storeAs('public/uploads', $filename);
            $Berita->thumbnail = $request->file('thumbnail')->getClientOriginalName();
            $Berita->thumbnail = isset($thumbnail_path) ? $thumbnail_path : '';
        }
        $Berita->save();

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $Berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Berita = Berita::findOrFail($id);
        $Berita->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data.');
    }
}
