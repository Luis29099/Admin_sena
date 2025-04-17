<?php

namespace App\Http\Controllers;

use App\Models\apprentices;
use App\Models\areas;
use App\Models\computers;
use App\Models\course_teacher;
use App\Models\courses;
use App\Models\teachers;
use App\Models\training_center;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consultas(){
        // $teachers =teachers::find(1);
        // return $teachers->area;
        // $apprentices=apprentices::find(1);
        // return $apprentices->course;
        // $course=courses::find(2);
        // return $course->area;
        // $training_center=training_center::find(1);
        // return $training_center->teachers;
        // $computer=computers::find(1);
        // return $computer->apprentice;
        // return apprentices::with(['course', 'computer'])->get();
    }
}
