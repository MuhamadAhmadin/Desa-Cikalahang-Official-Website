<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => env('APP_NAME') . ' | List Kategori',
            'kategori' => Kategori::all()
        ];

        return view('dashboard.kategori.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => env('APP_NAME') . ' | Tambah Kategori',
        ];

        return view('dashboard.kategori.create', $data);
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
        ]);

        $Kategori = new Kategori();
        $Kategori->nama = htmlspecialchars($request->nama);
        $Kategori->slug = Str::slug($Kategori->nama);
        $Kategori->save();

        return redirect()->back()->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori  $Kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $Kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori  $Kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $Kategori)
    {
        $data = [
            'title' => env('APP_NAME') . '| Edit Kategori',
            'kategori' => $Kategori,
        ];

        return view('dashboard.kategori.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori  $Kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $Kategori)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
        ]);

        $Kategori->nama = htmlspecialchars($request->nama);
        $Kategori->slug = Str::slug($Kategori->nama);
        $Kategori->save();

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori  $Kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $Kategori)
    {
        $Kategori->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data.');
    }
}
