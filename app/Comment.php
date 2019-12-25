<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected  $guarded = [];
    public function cours(){
        return $this->belongsTo("App\Cour");
    }
    public function users(){
        return $this->belongsTo("App\User");
    }
}
