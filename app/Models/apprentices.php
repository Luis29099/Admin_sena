<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class apprentices extends Model
{
    public function computer(){
        return $this->belongsTo(computers::class);
    }
    public function course(){
        return $this->hasMany(courses::class);
    }

}
