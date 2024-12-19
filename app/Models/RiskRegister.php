<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiskRegister extends Model
{
    protected $fillable = [
        'objective',
        'process_event',
        'risk_category',
        'risk_code',
        'risk_description',
        'risk_source',
        'amount',
        'qualitative',
        'risk_owner',
        'name_dept',
        'likelihood',
        'impact',
        'risk_level',
        'existing_control',
        'control_effectiveness',
        'control_description',
        'residual_likelihood',
        'residual_impact',
        'residual_risk_level',
        'risk_treatment',
        'mitigation_plan',
        'target_likelihood',
        'target_impact',
        'target_risk_level',
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($model) {
            $model->risk_level = $model->likelihood * $model->impact;
            $model->residual_risk_level = $model->residual_likelihood * $model->residual_impact;
            $model->target_risk_level = $model->target_likelihood * $model->target_impact;
        });
    }
}

