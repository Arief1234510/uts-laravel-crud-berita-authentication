@extends('admin.layouts.app', ['page' => __('User Management'), 'pageSlug' => 'users'])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">User Management</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">Add User</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('user.edit', $user) }}" class="btn btn-sm btn-info">Edit</a>
                                        <form action="{{ route('user.destroy', $user) }}" method="POST" style="display:inline">
                                            @csrf @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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
@endsection