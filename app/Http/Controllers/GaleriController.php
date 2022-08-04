<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($filter = '')
    {
        $Galeri = Galeri::orderBy('id', 'DESC')->get();
        $data = [
            'title' => env('APP_NAME') . ' | List Galeri',
            'galeri' => $Galeri,
        ];
        return view('dashboard.galeri.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => env('APP_NAME') . ' | Tambah Galeri',
        ];

        return view('dashboard.galeri.create', $data);
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
            'thumbnail' => ['nullable', 'file', 'mimes:jpg,jpeg,png,bmp', 'between:0,4048'],
            'tanggal' => ['nullable'],
        ]);


        $Galeri = new Galeri();
        $Galeri->judul = $request->judul;
        $Galeri->tanggal = $request->tanggal;
        if ($request->hasFile('thumbnail')) {
            $filename = Str::random(32) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $thumbnail_path = $request->file('thumbnail')->storeAs('public/uploads', $filename);
            $Galeri->thumbnail = $request->file('thumbnail')->getClientOriginalName();
            $Galeri->thumbnail = isset($thumbnail_path) ? $thumbnail_path : '';
        }
        $Galeri->save();

        return redirect()->back()->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galeri  $Galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $Galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeri  $Galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => env('APP_NAME') . '| Edit Galeri',
            'galeri' => Galeri::findOrFail($id),
        ];

        return view('dashboard.galeri.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeri  $Galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'tanggal' => ['nullable'],
            'thumbnail' => ['nullable', 'file', 'mimes:jpg,jpeg,png,bmp', 'between:0,4048'],
        ]);

        $Galeri = Galeri::findOrFail($id);
        $Galeri->judul = $request->judul;
        $Galeri->tanggal = $request->tanggal;

        if ($request->hasFile('thumbnail')) {
            $filename = Str::random(32) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $thumbnail_path = $request->file('thumbnail')->storeAs('public/uploads', $filename);
            $Galeri->thumbnail = $request->file('thumbnail')->getClientOriginalName();
            $Galeri->thumbnail = isset($thumbnail_path) ? $thumbnail_path : '';
        }
        $Galeri->save();

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeri  $Galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Galeri = Galeri::findOrFail($id);
        $Galeri->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data.');
    }
}
