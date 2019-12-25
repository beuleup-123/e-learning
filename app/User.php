<?php
namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array;
    use Illuminate\Http\Request;
     */
    protected $fillable = [
        'name', 'email', 'password', 'status'
    ];
    //protected $guarded = ['password','remember_token'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
        public function cours(){
        return $this->belongsToMany("App\Cour");
        //
    }
    public function comments(){
        return $this->hasMany("App\Comment");
        //
    }
    public function isAdmin(){
        return strtolower($this->status) === 'administrateur'? true : false;
    }
    /**Cett méthode va determiner si le user connecté a un role moderator*/
    public function isModerator(){
        return strtolower(@$this->status) === 'professeur'? true : false;
    }
    public function isUser(){
        return strtolower(@$this->status) === 'etudiant'? true : false;
    }
}
