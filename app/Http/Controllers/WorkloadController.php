<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkloadController extends Controller
{
    public function workload()
    {
        return view('index');
    }
}