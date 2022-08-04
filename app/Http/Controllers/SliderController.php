<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Slider = Slider::orderBy('id', 'DESC')->get();
        $data = [
            'title' => env('APP_NAME') . ' | List Slider',
            'slider' => $Slider,
        ];
        return view('dashboard.slider.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => env('APP_NAME') . ' | Tambah Slider',
        ];

        return view('dashboard.slider.create', $data);
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
            'thumbnail' => ['required', 'file', 'mimes:jpg,jpeg,png,bmp,webp', 'between:0,4048'],
            'title' => ['required'],
            'subtitle' => ['nullable'],
            'btn_text' => ['required'],
            'btn_link' => ['required'],
        ]);


        $Slider = new Slider();
        $Slider->title = $request->title;
        $Slider->urutan = $request->urutan ?? 0;
        $Slider->subtitle = $request->subtitle;
        $Slider->btn_text = $request->btn_text;
        $Slider->btn_link = $request->btn_link;
        if ($request->hasFile('thumbnail')) {
            $filename = Str::random(32) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $thumbnail_path = $request->file('thumbnail')->storeAs('public/uploads', $filename);
            $Slider->thumbnail = $request->file('thumbnail')->getClientOriginalName();
            $Slider->thumbnail = isset($thumbnail_path) ? $thumbnail_path : '';
        }
        $Slider->save();

        return redirect()->back()->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => env('APP_NAME') . '| Edit Slider',
            'slider' => Slider::findOrFail($id),
        ];

        return view('dashboard.slider.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable'],
            'btn_text' => ['required'],
            'btn_link' => ['required'],
            'thumbnail' => ['nullable', 'file', 'mimes:jpg,jpeg,png,bmp,webp', 'between:0,4048'],
        ]);

        $Slider = Slider::findOrFail($id);
        $Slider->title = $request->title;
        $Slider->urutan = $request->urutan ?? 0;
        $Slider->subtitle = $request->subtitle;
        $Slider->btn_text = $request->btn_text;
        $Slider->btn_link = $request->btn_link;

        if ($request->hasFile('thumbnail')) {
            $filename = Str::random(32) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $thumbnail_path = $request->file('thumbnail')->storeAs('public/uploads', $filename);
            $Slider->thumbnail = $request->file('thumbnail')->getClientOriginalName();
            $Slider->thumbnail = isset($thumbnail_path) ? $thumbnail_path : '';
        }
        $Slider->save();

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Slider = Slider::findOrFail($id);
        $Slider->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data.');
    }
}
