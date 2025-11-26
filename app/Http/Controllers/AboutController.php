<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Facility;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'about')->first();
        $facilities = Facility::orderBy('order')->get();

        return view('about', compact('page', 'facilities'));
    }
}
