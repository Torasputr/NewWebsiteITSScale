<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article() {
        $articles = Article::orderBy('date', 'desc')->paginate(9);
        return view('artikel.artikel', compact('articles'));
    }
    public function detail($id) {
        $article = Article::findOrFail($id);
        return view('artikel.detail', compact('article'));
    }
}
