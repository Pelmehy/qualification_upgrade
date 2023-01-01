<?php

namespace App\Http\Controllers;

use App\Exports\CurriculumExport;
use App\Models\Curriculum;
use App\Models\Professor;
use App\Models\Specialty;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CurriculumController extends Controller
{
    public function curriculum(Request $request, $specialty_id)
    {
        $specialties = Specialty::get_all();
        $professor_name = '';

        if ($request->isMethod('post')) {
            $specialty_id = $request->input('input_specialty');
            $professor_name = $request->input('professor_name');

            if (empty($professor_name)){
                $professor_ids = [];
            } else {
                $professor_ids = Professor::get_by_name($professor_name);
            }

            $curriculums = $this->prepare_curriculums(
                $specialty_id,
                $professor_ids
            );

            if ($request->input('action') == 'download') {
                return Excel::download(new CurriculumExport($curriculums), 'curricula.xlsx');
            }
        } else {
            $curriculums = $this->prepare_curriculums($specialty_id);
        }

        return view(
            'curriculum',
            [
                'specialty_id' => $specialty_id,
                'specialties' => $specialties,
                'curriculums' => $curriculums,
                'professor_name' => $professor_name
            ]
        );
    }

    private function filter($specialty_id, $professor_name)
    {
//        dd($specialty_id);
        if (empty($professor_name)){
            $professor_ids = [];
        } else {
            $professor_ids = Professor::get_by_name($professor_name);
        }

        $specialties = Specialty::get_all();
        $curriculums = $this->prepare_curriculums($specialty_id, $professor_ids);

        return view(
            'curriculum',
            [
                'specialty_id' => $specialty_id,
                'specialties' => $specialties,
                'curriculums' => $curriculums,
            ]
        );
    }

    private function prepare_curriculums($specialty_id, $professor_ids = []) {
        $curriculums = [];

        if ($specialty_id > 0 ) {
            $filtered_specialties = [$specialty_id];
        } else {
            $filtered_specialties = Curriculum::get_specialty_ids();
        }

        foreach ($filtered_specialties as $filtered_specialty) {
            $curriculum = Curriculum::get_by_additional_info($filtered_specialty, $professor_ids);
            if (!$curriculum->isEmpty()) {
                $curriculums[] = (object)[
                    'specialty_name' => Specialty::get($filtered_specialty)->name,
                    'curriculums' => $curriculum
                ];
            }
        }

        return $curriculums;
    }
}
