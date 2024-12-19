<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Impact extends Model
{
    protected $fillable = [
        'level',
        'severity',
        'criteria',
        'goals',
        'reputation',
        'customer_complaints',
        'employee_issues',
        'legal_issues',
        'regulatory_warnings',
        'budget_efficiency',
        'budget_absorption',
        'it_infrastructure',
        'operational_disruption',
        'health_safety'
    ];
}

