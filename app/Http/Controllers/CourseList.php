<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseList extends Controller
{
    public function course_list()
    {
        return view('course_list');
    }
}
