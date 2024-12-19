@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Risk</h2>
    <form method="POST" action="{{ route('risks.update', $risk->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="objective">Objective</label>
            <input type="text" class="form-control" id="objective" name="objective" value="{{ $risk->objective }}" required>
        </div>
        <div class="form-group">
            <label for="process_event">Process/Event</label>
            <input type="text" class="form-control" id="process_event" name="process_event" value="{{ $risk->process_event }}" required>
        </div>
        <div class="form-group">
            <label for="risk_category">Risk Category</label>
            <select class="form-control" id="risk_category" name="risk_category" required>
                <option value="Strategic" {{ $risk->risk_category == 'Strategic' ? 'selected' : '' }}>Strategic</option>
                <option value="Financial" {{ $risk->risk_category == 'Financial' ? 'selected' : '' }}>Financial</option>
                <option value="Operational" {{ $risk->risk_category == 'Operational' ? 'selected' : '' }}>Operational</option>
                <option value="Compliance" {{ $risk->risk_category == 'Compliance' ? 'selected' : '' }}>Compliance</option>
            </select>
        </div>
        <div class="form-group">
            <label for="risk_code">Risk Code</label>
            <input type="text" class="form-control" id="risk_code" name="risk_code" value="{{ $risk->risk_code }}" required>
        </div>
        <div class="form-group">
            <label for="risk_description">Risk Description</label>
            <textarea class="form-control" id="risk_description" name="risk_description" rows="3" required>{{ $risk->risk_description }}</textarea>
        </div>
        <div class="form-group">
            <label for="risk_source">Risk Source</label>
            <input type="text" class="form-control" id="risk_source" name="risk_source" value="{{ $risk->risk_source }}" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" class="form-control" id="amount" name="amount" step="0.01" value="{{ $risk->amount }}">
        </div>
        <div class="form-group">
            <label for="qualitative">Qualitative</label>
            <input type="text" class="form-control" id="qualitative" name="qualitative" value="{{ $risk->qualitative }}" required>
        </div>
        <div class="form-group">
            <label for="risk_owner">Risk Owner</label>
            <input type="text" class="form-control" id="risk_owner" name="risk_owner" value="{{ $risk->risk_owner }}" required>
        </div>
        <div class="form-group">
            <label for="name_dept">Name/Dept</label>
            <input type="text" class="form-control" id="name_dept" name="name_dept" value="{{ $risk->name_dept }}" required>
        </div>
        <div class="form-group">
            <label for="likelihood">Likelihood (1-5)</label>
            <input type="number" class="form-control" id="likelihood" name="likelihood" min="1" max="5" value="{{ $risk->likelihood }}" required>
        </div>
        <div class="form-group">
            <label for="impact">Impact (1-5)</label>
            <input type="number" class="form-control" id="impact" name="impact" min="1" max="5" value="{{ $risk->impact }}" required>
        </div>
        <div class="form-group">
            <label for="existing_control">Existing Control</label>
            <select class="form-control" id="existing_control" name="existing_control" required>
                <option value="Ada" {{ $risk->existing_control == 'Ada' ? 'selected' : '' }}>Ada</option>
                <option value="Tidak Ada" {{ $risk->existing_control == 'Tidak Ada' ? 'selected' : '' }}>Tidak Ada</option>
            </select>
        </div>
        <div class="form-group">
            <label for="control_effectiveness">Control Effectiveness</label>
            <select class="form-control" id="control_effectiveness" name="control_effectiveness" required>
                <option value="Memadai" {{ $risk->control_effectiveness == 'Memadai' ? 'selected' : '' }}>Memadai</option>
                <option value="Belum memadai" {{ $risk->control_effectiveness == 'Belum memadai' ? 'selected' : '' }}>Belum memadai</option>
            </select>
        </div>
        <div class="form-group">
            <label for="control_description">Control Description</label>
            <textarea class="form-control" id="control_description" name="control_description" rows="3" required>{{ $risk->control_description }}</textarea>
        </div>
        <div class="form-group">
            <label for="residual_likelihood">Residual Likelihood (1-5)</label>
            <input type="number" class="form-control" id="residual_likelihood" name="residual_likelihood" min="1" max="5" value="{{ $risk->residual_likelihood }}" required>
        </div>
        <div class="form-group">
            <label for="residual_impact">Residual Impact (1-5)</label>
            <input type="number" class="form-control" id="residual_impact" name="residual_impact" min="1" max="5" value="{{ $risk->residual_impact }}" required>
        </div>
        <div class="form-group">
            <label for="risk_treatment">Risk Treatment</label>
            <input type="text" class="form-control" id="risk_treatment" name="risk_treatment" value="{{ $risk->risk_treatment }}" required>
        </div>
        <div class="form-group">
            <label for="mitigation_plan">Mitigation Plan</label>
            <textarea class="form-control" id="mitigation_plan" name="mitigation_plan" rows="3" required>{{ $risk->mitigation_plan }}</textarea>
        </div>
        <div class="form-group">
            <label for="target_likelihood">Target Likelihood (1-5)</label>
            <input type="number" class="form-control" id="target_likelihood" name="target_likelihood" min="1" max="5" value="{{ $risk->target_likelihood }}" required>
        </div>
        <div class="form-group">
            <label for="target_impact">Target Impact (1-5)</label>
            <input type="number" class="form-control" id="target_impact" name="target_impact" min="1" max="5" value="{{ $risk->target_impact }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

