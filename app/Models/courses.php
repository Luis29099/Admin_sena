<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    public function trainingcenter(){
        return $this->belongsTo(training_center::class);
        
    }
    public function area(){
        return $this->belongsTo(areas::class);
        
    }
    public function aprenttice(){
        return $this->hasMany(apprentices::class);
        
    }
    public function teachers(){
        return $this->belongsToMany(teachers::class,'course_teacher');
        
    }
}
