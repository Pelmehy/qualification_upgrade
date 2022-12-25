<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function curriculum()
    {
        return view('curriculum');
    }
}
