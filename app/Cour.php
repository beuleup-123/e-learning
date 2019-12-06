<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    protected  $guarded = [];

    public function categories(){
        return $this->belongsTo("App\category");
    //
}
    public function users(){
        return $this->belongsToMany("App\User");
    }
}
