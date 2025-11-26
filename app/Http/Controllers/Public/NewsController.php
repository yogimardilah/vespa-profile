<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return view('news', compact('news'));
    }
}
