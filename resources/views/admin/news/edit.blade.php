@extends('admin.layouts.app', [
    'page' => 'Edit Berita',
    'pageSlug' => 'news'
])

@section('content')
<div class="content">
    <div class="container-fluid">
    @include('admin.partials.alert')
        <h4>Edit Berita</h4>

        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="title" value="{{ $news->title }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Isi</label>
                <textarea name="content" class="form-control" rows="5">{{ $news->content }}</textarea>
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="image" class="form-control">
            </div>

            @if($news->image)
                <img src="{{ asset('storage/'.$news->image) }}" width="200">
            @endif

            <br><br>

            <button class="btn btn-primary">Update</button>
        </form>

    </div>
</div>
@endsection