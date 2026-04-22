@extends('admin.layouts.app', [
    'page' => 'News',
    'pageSlug' => 'news'
])

@section('content')
<div class="content">
    <div class="container-fluid">
    @include('admin.partials.alert')
        <div class="d-flex justify-content-between mb-3">
            <h4>Data Berita</h4>
            <a href="{{ route('news.create') }}" class="btn btn-primary">
                + Tambah Berita
            </a>
        </div>

        @foreach($news as $n)
            <div class="card mb-3">
                <div class="card-body">
                    <h5>{{ $n->title }}</h5>

                    <p>{!! $n->content !!}</p>

                    @if($n->image)
                        <img src="{{ asset('storage/'.$n->image) }}" width="200">
                    @endif

                    <br><br>

                    <a href="{{ route('news.edit', $n->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('news.destroy', $n->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection