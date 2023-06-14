<?php

namespace App\Http\Controllers;

use App\Models\{Article, Formasi};
use Illuminate\Http\{Request};
use Illuminate\Support\Facades\{Auth};

class WebPageCon extends Controller
{
    public function index()
    {
        $articles = Article::limit(4)->orderBy('id', 'DESC')->get();
        return view('webpage.index', compact('articles'));
    }

    public function infoLowonganShow()
    {
        $user = Auth::user();
        $formasis = Formasi::all();

        return view('webpage.lowongan', compact('user', 'formasis'));
    }

    public function articleShow($name)
    {
        $article = Article::where('name', $name)->firstOrFail();

        return view('webpage.berita', compact('article'));
    }
}
