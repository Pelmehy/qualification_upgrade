<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CurriculumExport implements FromView
{
    public function __construct($curriculums)
    {
        $this->curriculums = $curriculums;
    }
    public function View(): View
    {
        return view(
            'exports.curriculum',
            [
                'curriculums' => $this->curriculums,
            ]
        );
    }
}
