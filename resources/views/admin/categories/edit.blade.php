@extends('admin.layouts.app', ['page' => __('Category Management'), 'pageSlug' => 'categories'])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Edit Kategori') }}</h5>
                </div>
                <form method="post" action="{{ route('categories.update', $category) }}" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        @method('put') 
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <label>{{ __('Nama Kategori') }}</label>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name', $category->name) }}">
                            @include('admin.alerts.feedback', ['field' => 'name'])
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Update') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection