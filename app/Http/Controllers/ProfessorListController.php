<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorListController extends Controller
{
    public function professor_list()
    {
        return view('professor_list');
    }
}
