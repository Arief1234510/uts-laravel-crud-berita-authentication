
@extends('admin.layouts.app', ['page' => __('Category Management'), 'pageSlug' => 'categories'])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Kategori Berita</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary">Tambah Kategori</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter">
                            <thead class="text-primary">
                                <tr>
                                    <th>Nama Kategori</th>
                                    <th>Slug</th>
                                    <th class="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-info">Edit</a>
                                        <form action="{{ route('categories.destroy', $category) }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
</form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@endsection