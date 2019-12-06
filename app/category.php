<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function cours(){
        return $this->hasMany("App\Cour");
    }
}
