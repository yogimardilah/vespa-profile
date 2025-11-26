<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'body' => 'nullable|string',
            'published_at' => 'nullable|date',
            'image' => 'nullable|image|max:2048',
        ]);

        $data['slug'] = Str::slug($data['title']) . '-' . Str::random(6);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/news');
            $data['image'] = Storage::url($path);
        }

        News::create($data);
        return redirect()->route('admin.news.index')->with('success', 'Berita dibuat');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'body' => 'nullable|string',
            'published_at' => 'nullable|date',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/news');
            $data['image'] = Storage::url($path);
        }

        $news->update($data);
        return redirect()->route('admin.news.index')->with('success', 'Berita diperbarui');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Berita dihapus');
    }
}
