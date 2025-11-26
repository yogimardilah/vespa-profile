<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Facility;

class PublicController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'about')->first();
        $facilities = Facility::orderBy('order')->get();

        return view('about', compact('page', 'facilities'));
    }
}
