<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => env('APP_NAME') . ' | List Menu',
            'menu' => Menu::all()
        ];

        return view('dashboard.menu.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => env('APP_NAME') . ' | Tambah Menu',
        ];

        return view('dashboard.menu.create', $data);
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
            'link' => ['required', 'string'],
        ]);

        $Menu = new Menu();
        $Menu->nama = htmlspecialchars($request->nama);
        $Menu->link = $request->link;
        $Menu->visible = isset($request->visible) ? $request->visible : 0;
        $Menu->urutan = isset($request->urutan) ? $request->urutan : 0;
        $Menu->save();

        return redirect()->back()->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $Menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $Menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $Menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $Menu)
    {
        $data = [
            'title' => env('APP_NAME') . '| Edit Menu',
            'menu' => $Menu,
        ];

        return view('dashboard.menu.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $Menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $Menu)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'link' => ['required', 'string'],
        ]);

        $Menu->nama = htmlspecialchars($request->nama);
        $Menu->link = $request->link;
        $Menu->visible = isset($request->visible) ? $request->visible : 0;
        $Menu->urutan = isset($request->urutan) ? $request->urutan : 0;
        $Menu->save();

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $Menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $Menu)
    {
        $Menu->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data.');
    }
}
