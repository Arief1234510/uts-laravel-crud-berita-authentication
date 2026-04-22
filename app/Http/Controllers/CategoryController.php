<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = \App\Models\Category::all();
        // Mengarah ke resources/views/admin/categories/index.blade.php
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    // Mengarahkan ke form tambah kategori
    return view('admin.categories.create', ['pageSlug' => 'categories']);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|unique:categories|max:255',
    ]);

    // Simpan ke Database
    \App\Models\Category::create([
        'name' => $request->name,
        'slug' => \Illuminate\Support\Str::slug($request->name),
    ]);

    // 3. Kembali ke halaman daftar dengan pesan sukses
    return redirect()->route('categories.index')->withStatus('Kategori berhasil ditambahkan.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
{
    // Menampilkan form edit dengan data kategori yang dipilih
    return view('admin.categories.edit', compact('category'), ['pageSlug' => 'categories']);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
{
    // Validasi input
    $request->validate([
        'name' => 'required|unique:categories,name,' . $category->id . '|max:255',
    ]);
    $category->update([
        'name' => $request->name,
        'slug' => \Illuminate\Support\Str::slug($request->name),
    ]);
    return redirect()->route('categories.index')->withStatus('Kategori berhasil diperbarui.');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
{
    // Menghapus data dari database
    $category->delete();

    // Kembali ke halaman index dengan pesan sukses
    return redirect()->route('categories.index')->withStatus('Kategori berhasil dihapus.');
}
}
