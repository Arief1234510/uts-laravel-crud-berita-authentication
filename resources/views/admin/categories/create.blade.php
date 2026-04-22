@extends('admin.layouts.app', ['page' => __('Category Management'), 'pageSlug' => 'categories'])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Tambah Kategori') }}</h5>
                </div>
                <form method="post" action="{{ route('categories.store') }}" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <label>{{ __('Nama Kategori') }}</label>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Contoh: Teknologi') }}" value="{{ old('name') }}">
                            @include('admin.alerts.feedback', ['field' => 'name'])
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Simpan') }}</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-fill btn-default">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection