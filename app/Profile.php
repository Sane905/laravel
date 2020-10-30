<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=['user_id','introduce','artist','age','place','music','gender','image'];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }

    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }


}
