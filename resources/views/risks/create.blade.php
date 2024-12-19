@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Risk</h2>
    <form method="POST" action="{{ route('risks.store') }}">
        @csrf
        <div class="form-group">
            <label for="objective">Objective</label>
            <input type="text" class="form-control" id="objective" name="objective" required>
        </div>
        <div class="form-group">
            <label for="process_event">Process/Event</label>
            <input type="text" class="form-control" id="process_event" name="process_event" required>
        </div>
        <div class="form-group">
            <label for="risk_category">Risk Category</label>
            <select class="form-control" id="risk_category" name="risk_category" required>
                <option value="">Select Category</option>
                <option value="Strategic">Strategic</option>
                <option value="Financial">Financial</option>
                <option value="Operational">Operational</option>
                <option value="Compliance">Compliance</option>
            </select>
        </div>
        <div class="form-group">
            <label for="risk_code">Risk Code</label>
            <input type="text" class="form-control" id="risk_code" name="risk_code" required>
        </div>
        <div class="form-group">
            <label for="risk_description">Risk Description</label>
            <textarea class="form-control" id="risk_description" name="risk_description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="risk_source">Risk Source</label>
            <input type="text" class="form-control" id="risk_source" name="risk_source" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" class="form-control" id="amount" name="amount" step="0.01">
        </div>
        <div class="form-group">
            <label for="qualitative">Qualitative</label>
            <input type="text" class="form-control" id="qualitative" name="qualitative" required>
        </div>
        <div class="form-group">
            <label for="risk_owner">Risk Owner</label>
            <input type="text" class="form-control" id="risk_owner" name="risk_owner" required>
        </div>
        <div class="form-group">
            <label for="name_dept">Name/Dept</label>
            <input type="text" class="form-control" id="name_dept" name="name_dept" required>
        </div>
        <div class="form-group">
            <label for="likelihood">Likelihood (1-5)</label>
            <input type="number" class="form-control" id="likelihood" name="likelihood" min="1" max="5" required>
        </div>
        <div class="form-group">
            <label for="impact">Impact (1-5)</label>
            <input type="number" class="form-control" id="impact" name="impact" min="1" max="5" required>
        </div>
        <div class="form-group">
            <label for="existing_control">Existing Control</label>
            <select class="form-control" id="existing_control" name="existing_control" required>
                <option value="Ada">Ada</option>
                <option value="Tidak Ada">Tidak Ada</option>
            </select>
        </div>
        <div class="form-group">
            <label for="control_effectiveness">Control Effectiveness</label>
            <select class="form-control" id="control_effectiveness" name="control_effectiveness" required>
                <option value="Memadai">Memadai</option>
                <option value="Belum memadai">Belum memadai</option>
            </select>
        </div>
        <div class="form-group">
            <label for="control_description">Control Description</label>
            <textarea class="form-control" id="control_description" name="control_description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="residual_likelihood">Residual Likelihood (1-5)</label>
            <input type="number" class="form-control" id="residual_likelihood" name="residual_likelihood" min="1" max="5" required>
        </div>
        <div class="form-group">
            <label for="residual_impact">Residual Impact (1-5)</label>
            <input type="number" class="form-control" id="residual_impact" name="residual_impact" min="1" max="5" required>
        </div>
        <div class="form-group">
            <label for="risk_treatment">Risk Treatment</label>
            <input type="text" class="form-control" id="risk_treatment" name="risk_treatment" required>
        </div>
        <div class="form-group">
            <label for="mitigation_plan">Mitigation Plan</label>
            <textarea class="form-control" id="mitigation_plan" name="mitigation_plan" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="target_likelihood">Target Likelihood (1-5)</label>
            <input type="number" class="form-control" id="target_likelihood" name="target_likelihood" min="1" max="5" required>
        </div>
        <div class="form-group">
            <label for="target_impact">Target Impact (1-5)</label>
            <input type="number" class="form-control" id="target_impact" name="target_impact" min="1" max="5" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

