<?php

namespace App\Http\Controllers;

use App\Models\RiskRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiskRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $risks = RiskRegister::orderBy('risk_level', 'desc')->get();
        return view('dashboard', compact('risks'));
    }

    public function create()
    {
        return view('risks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'objective' => 'required',
            'process_event' => 'required',
            'risk_category' => 'required',
            'risk_code' => 'required',
            'risk_description' => 'required',
            'risk_source' => 'required',
            'amount' => 'nullable|numeric',
            'qualitative' => 'required',
            'risk_owner' => 'required',
            'name_dept' => 'required',
            'likelihood' => 'required|numeric|min:1|max:5',
            'impact' => 'required|numeric|min:1|max:5',
            'existing_control' => 'required|in:Ada,Tidak Ada',
            'control_effectiveness' => 'required|in:Memadai,Belum memadai',
            'control_description' => 'required',
            'residual_likelihood' => 'required|numeric|min:1|max:5',
            'residual_impact' => 'required|numeric|min:1|max:5',
            'risk_treatment' => 'required',
            'mitigation_plan' => 'required',
            'target_likelihood' => 'required|numeric|min:1|max:5',
            'target_impact' => 'required|numeric|min:1|max:5',
        ]);

        RiskRegister::create($validated);

        return redirect()->route('dashboard')->with('success', 'Risk register created successfully.');
    }

    public function show(RiskRegister $risk)
    {
        return view('risks.show', compact('risk'));
    }

    public function edit(RiskRegister $risk)
    {
        return view('risks.edit', compact('risk'));
    }

    public function update(Request $request, RiskRegister $risk)
    {
        $validated = $request->validate([
            'objective' => 'required',
            'process_event' => 'required',
            'risk_category' => 'required',
            'risk_code' => 'required',
            'risk_description' => 'required',
            'risk_source' => 'required',
            'amount' => 'nullable|numeric',
            'qualitative' => 'required',
            'risk_owner' => 'required',
            'name_dept' => 'required',
            'likelihood' => 'required|numeric|min:1|max:5',
            'impact' => 'required|numeric|min:1|max:5',
            'existing_control' => 'required|in:Ada,Tidak Ada',
            'control_effectiveness' => 'required|in:Memadai,Belum memadai',
            'control_description' => 'required',
            'residual_likelihood' => 'required|numeric|min:1|max:5',
            'residual_impact' => 'required|numeric|min:1|max:5',
            'risk_treatment' => 'required',
            'mitigation_plan' => 'required',
            'target_likelihood' => 'required|numeric|min:1|max:5',
            'target_impact' => 'required|numeric|min:1|max:5',
        ]);

        $risk->update($validated);

        return redirect()->route('dashboard')->with('success', 'Risk register updated successfully.');
    }

    public function destroy(RiskRegister $risk)
    {
        $risk->delete();

        return redirect()->route('dashboard')->with('success', 'Risk register deleted successfully.');
    }
}

