<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    public function teachers(){
        return $this->hasMany('App\Models\User');

    }
    public function curses(){
        return $this->hasMany('App\Models\User');
        
    }

}
