<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorListController extends Controller
{
    public function professor_list()
    {
        $professors = Professor::get_all();

        return view(
            'professor_list',
            [
                'professors' => $professors
            ]
        );
    }

    public function professor_info($id)
    {
        $professor = Professor::get($id);
        return view(
            'professor_info',
            [
                'professor' => $professor
            ]
        );
    }
}
