<?php

namespace App\Http\Controllers;

use App\Models\apprentices;
use App\Models\areas;
use App\Models\computers;
use App\Models\courses;
use App\Models\teachers;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consultas(){
        $computer=computers::find(1);
        return $computer;
        
        $apprentices=apprentices::find(1);
        return $apprentices;
        //$areas=areas::find(2);
        //return $areas;
    }
}
