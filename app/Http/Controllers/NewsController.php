<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();

        return view('admin.news.index', [
            'news' => $news,
            'pageSlug' => 'news',
            'title' => 'Berita'
        ]);
    }

    public function create()
    {
        return view('admin.news.create', [
            'pageSlug' => 'news',
            'title' => 'Tambah Berita'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news', 'public');
        }

        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath
        ]);

        return redirect()->route('news.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', [
            'news' => $news,
            'pageSlug' => 'news',
            'title' => 'Edit Berita'
        ]);
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image'
        ]);

        if ($request->hasFile('image')) {
            $news->image = $request->file('image')->store('news', 'public');
        }

        $news->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->route('news.index')->with('success', 'Berita berhasil diupdate');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return back()->with('success', 'Berita dihapus');
    }
}