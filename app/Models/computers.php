<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class computers extends Model
{
    public function apprentices(){
        return $this->hasOne(apprentices::class);
    }
    

}
