<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $allNews = News::with('user')->paginate(15);
        return view('news.index', compact('allNews'));
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }
}
