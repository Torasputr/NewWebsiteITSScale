<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news() {
        // ambil semua berita terbaru, tampilkan 9 per halaman
        $news = News::orderBy('date', 'desc')->paginate(9);
        return view('berita.berita', compact('news'));
    }

    public function detail($id) {
        // tampilkan detail berita berdasarkan ID
        $item = News::findOrFail($id);
        return view('berita.detail', compact('item'));
    }
}
