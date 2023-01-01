<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Curriculum extends Model
{
    use HasFactory;

    public static function get_by_additional_info($specialty_id, $professor_ids)
    {
        $curriculums = Curriculum::query();
        if ($specialty_id > 0) {
            $curriculums->where('specialty_id', $specialty_id);
        }
        if (!empty($professor_ids)) {
            $curriculums->whereIn('professor_id', $professor_ids);
        }

        return $curriculums->get();
    }
    public static function get_by_specialty($specialty_id) {
        return Curriculum::where('specialty_id', $specialty_id)->get();
    }

    public static function get_specialty_ids()
    {
        return Curriculum::select('specialty_id')->groupBy('specialty_id')->pluck('specialty_id');
    }

    public static function get_workload_one($professor_id, $specialty_id, $subject_id) {
        $workload_one = Curriculum::query()
            ->where('professor_id', $professor_id)
            ->orderBy('specialty_id')
            ->orderBy('subject_id');

        if ($specialty_id > 0) {
            $workload_one->where('specialty_id', $specialty_id);
        }
        if ($subject_id > 0) {
            $workload_one->where('subject_id', $subject_id);
        }

        return $workload_one->get();

    }

    public static function get_workload_sum($professor_id, $specialty_id, $subject_id)
    {
        $workload_sum = Curriculum::query()
            ->where('professor_id', $professor_id);

        if ($specialty_id > 0) {
            $workload_sum->where('specialty_id', $specialty_id);
        }
        if ($subject_id > 0) {
            $workload_sum->where('subject_id', $subject_id);
        }

        $workload_sum->select(
            'professor_id',
            DB::raw('sum(lecture_hours) as lecture_hours'),
            DB::raw('sum(pract_hours) as pract_hours'),
            DB::raw('sum(lab_hours) as lab_hours'),
        )
        ->groupBy('professor_id');

        return $workload_sum->first();

    }
    public function professor()
    {
        return $this->belongsTo('App\Models\Professor');
    }

    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }

    public function specialty()
    {
        return $this->belongsTo('App\Models\Specialty');
    }
}
