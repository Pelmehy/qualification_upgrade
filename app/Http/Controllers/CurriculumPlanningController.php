<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Models\Professor;
use App\Models\Specialty;
use App\Models\Subject;
use Illuminate\Http\Request;

class CurriculumPlanningController extends Controller
{
    public function curriculum_planning()
    {
        $specialties = Specialty::get_all();
        $subjects = Subject::get_all();
        $professors = Professor::get_all();

        return view(
            'curriculum_planning',
            [
                'specialties' => $specialties,
                'subjects' => $subjects,
                'professors' => $professors
            ]
        );
    }

    public function curriculum_save(Request $request)
    {
//        dd($request);

        $count = $request->input('val');
        $specialty_id = $request->input('inputSpecialty');

        for ($i = 1; $i < $count; $i++) {
            $subject_id = $request->input('textSelect-'.$i);
            if ($subject_id == 'customOption' || is_null($subject_id)) {
                $subject = new Subject();

                $subject->name = $request->input('form-12-'.$i);
                $subject->save();

                $subject_id = $subject->id;
            }

            $curriculum = new Curriculum();

            $curriculum->specialty_id = $specialty_id;
            $curriculum->subject_id = $subject_id;
            $curriculum->professor_id = $request->input('professorId-'.$i);
            $curriculum->lecture_hours = $request->input('Lectures-'.$i);
            $curriculum->pract_hours = $request->input('pract-'.$i);
            $curriculum->lab_hours = $request->input('lab-'.$i);

            $curriculum->save();

        }

        return redirect()->route('curriculum', [$specialty_id]);
    }
}
