<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;

class PublicController extends Controller
{
    public function index()
    {
        $news = News::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return view('news', compact('news'));
    }
}
