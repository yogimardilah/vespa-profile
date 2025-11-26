<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        return view('gallery', compact('galleries'));
    }
}
