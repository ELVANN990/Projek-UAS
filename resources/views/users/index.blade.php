@extends('layouts.app')

@section('content')
<div class="container">
    <h2>User Management</h2>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Add New User</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ ucfirst($user->role) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


