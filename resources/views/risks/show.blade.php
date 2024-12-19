@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Risk Details</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $risk->risk_code }} - {{ $risk->objective }}</h5>
            <p class="card-text"><strong>Category:</strong> {{ $risk->risk_category }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $risk->risk_description }}</p>
            <p class="card-text"><strong>Risk Level:</strong> {{ $risk->risk_level }}</p>
            <p class="card-text"><strong>Risk Owner:</strong> {{ $risk->risk_owner }}</p>
            <p class="card-text"><strong>Treatment:</strong> {{ $risk->risk_treatment }}</p>
            <p class="card-text"><strong>Mitigation Plan:</strong> {{ $risk->mitigation_plan }}</p>
            <a href="{{ route('risks.edit', $risk->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
        </div>
    </div>
</div>
@endsection

