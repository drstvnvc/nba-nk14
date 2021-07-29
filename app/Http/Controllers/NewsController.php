<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Team;
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

    public function getNewsByTeam($teamName)
    {
        $team = Team::where('name', $teamName)->firstOrFail();
        $news = $team->news()->paginate(10);
        return view('news.team-news', compact('team', 'news'));
    }
}
