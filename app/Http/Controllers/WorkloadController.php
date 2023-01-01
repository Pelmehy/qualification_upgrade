<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Models\Professor;
use App\Models\Specialty;
use App\Models\Subject;
use Illuminate\Http\Request;

class WorkloadController extends Controller
{
    public function workload(Request $request)
    {
        $specialties = Specialty::get_all();
        $subjects = Subject::get_all();

        $professor_name = '';
        $specialty_id = 0;
        $subject_id = 0;

        if ($request->isMethod('post')) {
            $professor_name = $request->input('professor_name');
            if (empty($professor_name)){
                $professor_ids = Professor::get_ids();;
            } else {
                $professor_ids = Professor::get_by_name($professor_name);
            }

            $specialty_id = $request->input('specialty');
            $subject_id = $request->input('subject');

            $workloads = $this->get_workload(
                $professor_ids,
                $specialty_id,
                $subject_id
            );
        } else {
            $professor_ids = Professor::get_ids();
            $workloads = $this->get_workload($professor_ids);
        }

        return view(
            'index',
            [
                'professor_name' => $professor_name,
                'specialty_id' => $specialty_id,
                'subject_id' => $subject_id,
                'subjects' => $subjects,
                'specialties' => $specialties,
                'workloads' => $workloads
            ]
        );
    }

    public  function get_workload($professor_ids, $specialty_id = 0, $subject_id = 0)
    {
        $workloads = [];

        foreach ($professor_ids as $professor_id) {
            $workload_one = Curriculum::get_workload_one($professor_id, $specialty_id, $subject_id);
            $workload_sum = Curriculum::get_workload_sum($professor_id, $specialty_id, $subject_id);

            if (!$workload_one->isEmpty() && !is_null($workload_sum)) {
                $workloads[] = (object) [
                    'workload_one' => $workload_one,
                    'workload_sum' => $workload_sum
                ];
            }
        }

        return $workloads;
    }
}
