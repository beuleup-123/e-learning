<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Support\Str;

class Cour extends Model
{
    protected  $guarded = [];

    public function categories(){
        return $this->belongsTo("App\category");
    //
}
    public function comments(){
        return $this->hasMany("App\Comment");
    }
    public function users(){
        return $this->belongsToMany("App\User");
    }
    public static function boot(){
        parent::boot();
        static::saving(function($model){
            $model->slug = Str::slug($model->nom);
        });
    }

}
