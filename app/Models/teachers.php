<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    public function area(){
        return $this->belongsTo(areas::class);
        
    }
    public function training_center(){
        return $this->belongsTo(training_center::class);
        
    }
    public function courses(){
        return $this->belongsToMany(courses::class,'course_teacher');
        
    }
}
