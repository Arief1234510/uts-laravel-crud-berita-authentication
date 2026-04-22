@extends('Layout.master')

@section('title','Beranda')

@section('content')

<div class="container">
    <div class="row">

        <!-- Konten kiri -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg">
                <div class="card-body">
                    <div class="small text-muted">January 1, 2023</div>
                    <h2 class="card-title">Featured Post Title</h2>
                    <p class="card-text">Contoh isi berita.</p>
                    <a class="btn btn-primary" href="#">Read more →</a>
                </div>
            </div>
        </div>

        <!-- Sidebar kanan -->
        <div class="col-lg-4">
            @include('Layout.sidebar')
        </div>

    </div>
</div>

@endsection