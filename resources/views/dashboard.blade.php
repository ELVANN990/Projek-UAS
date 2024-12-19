@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('risks.create') }}">Add New Risk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('impact') }}">Impact Table</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('likelihood') }}">Likelihood Table</a>
                        </li>
                        @if(auth()->user()->isAdmin())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">User Management</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" 
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Risk Register Dashboard</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Risk Code</th>
                                    <th>Objective</th>
                                    <th>Risk Category</th>
                                    <th>Risk Description</th>
                                    <th>Risk Level</th>
                                    <th>Risk Owner</th>
                                    <th>Treatment</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($risks as $risk)
                                <tr>
                                    <td>{{ $risk->risk_code }}</td>
                                    <td>{{ $risk->objective }}</td>
                                    <td>{{ $risk->risk_category }}</td>
                                    <td>{{ $risk->risk_description }}</td>
                                    <td>
                                        <span class="badge badge-{{ $risk->risk_level > 15 ? 'danger' : ($risk->risk_level > 8 ? 'warning' : 'success') }}">
                                            {{ $risk->risk_level }}
                                        </span>
                                    </td>
                                    <td>{{ $risk->risk_owner }}</td>
                                    <td>{{ $risk->risk_treatment }}</td>
                                    <td>
                                        <a href="{{ route('risks.show', $risk->id) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('risks.edit', $risk->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('risks.destroy', $risk->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this risk?')">Delete</button>
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

