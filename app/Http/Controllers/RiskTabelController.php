<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RiskTabelController extends Controller
{
    public function likelihood()
    {
        // dd('Likelihood method called');
        Log::info('Reached likelihood controller');
        return view('likelihood');
    }

    public function impact()
    {
        // dd('Impact method called');
        Log::info('Reached impact controller');
        return view('impact');
    }
}



