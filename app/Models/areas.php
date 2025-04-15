<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    public function teachers(){
        return $this->hasMany(teachers::class);

    }
    public function courses(){
        return $this->hasMany(courses::class);
        
    }

}
