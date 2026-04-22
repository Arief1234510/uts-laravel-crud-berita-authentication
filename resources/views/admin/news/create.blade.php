@extends('admin.layouts.app', [
    'page' => 'Tambah Berita',
    'pageSlug' => 'news'
])

@section('content')
<div class="content">
    <div class="container-fluid">
    @include('admin.partials.alert')
        <h4>Tambah Berita</h4>

        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Isi</label>
                <textarea name="content" class="form-control" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="image" class="form-control" onchange="previewImage(event)">
                <img id="preview" src="#" width="200" style="display:none; margin-top:10px;">
            </div>

            <button class="btn btn-success mt-2">Simpan</button>
        </form>
        <script>
function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('preview');

    const file = input.files[0];
    if (file) {
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    }
}
</script>
    </div>
</div>
@endsection