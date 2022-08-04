<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kategori;
use App\Models\Page;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontPageController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Homepage',
            'berita' => Berita::orderBy('id', 'DESC')->take(4)->get(),
            'galeri' => Galeri::orderBy('id', 'DESC')->take(6)->get(),
            'slider' => Slider::orderBy('urutan', 'ASC')->take(3)->get()
        ];

        return view('welcome', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'Tentang'
        ];

        return view('tentang', $data);
    }

    public function kontak()
    {
        $data = [
            'title' => 'Kontak Kami',
        ];

        return view('kontak', $data);
    }

    public function berita()
    {
        $data = [
            'title' => 'List Berita',
            'beritas' => Berita::where('visible', 1)->orderBy('id', 'DESC')->paginate(3)
        ];

        return view('berita', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'List Galeri',
        ];

        return view('galeri', $data);
    }

    public function berita_show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $data = [
            'title' => $berita->judul,
            'berita' => $berita
        ];
        $current_view = $berita->views;
        $berita->views = $current_view + 1;
        $berita->save();

        return view('berita_detail', $data);
    }

    public function berita_kategori_list($slug)
    {
        $kategori = Kategori::where('slug', $slug)->firstOrFail();
        $berita = Berita::where('kategori_id', $kategori->id)->where('visible', 1)->paginate(3);
        $data = [
            'title' => 'Kategori: ' . $kategori->nama,
            'kategori' => $kategori,
            'beritas' => $berita
        ];

        return view('berita_kategori', $data);
    }

    public function berita_search(Request $request)
    {
        $keyword = htmlspecialchars($request->keyword);
        $berita = Berita::where(function ($query) use ($keyword) {
            $query->orWhere('judul', 'LIKE', '%'.$keyword.'%');
            $query->orWhere('deskripsi', 'LIKE', '%'.$keyword.'%');
        })->where('visible', 1)->paginate(3);
        $data = [
            'title' => 'Keyword: ' . $keyword,
            'beritas' => $berita
        ];

        return view('berita_search', $data);
    }

    public function page_show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $data = [
            'title' => $page->judul,
            'page' => $page
        ];


        return view('page_detail', $data);
    }

}
