<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;

class PublicController extends Controller
{
    public function index()
    {
        $galleries = Gallery::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        return view('gallery', compact('galleries'));
    }
}
