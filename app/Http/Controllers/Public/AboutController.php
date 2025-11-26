<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Facility;

class AboutController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'about')->first();
        $facilities = Facility::orderBy('order')->get();

        return view('about', compact('page', 'facilities'));
    }
}
