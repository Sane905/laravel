<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;


class Profile extends Model
{
    protected $fillable = [
        'user_id','introduce','artist','age','place','music','gender','image',
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function scopeOpen($query)
    {
        return $profiles = Profile::all();
    }

    public function scopeGender($query, $str)
    {
        return $profiles = Profile::Where('gender',$str);
    }

    public function scopeMusic($query, $str)
    {
        return $profiles = Profile::Where('music','LIKE',"%{$str}%");
    }

    public function scopeKeyword($query, $str)
    {
        return $profiles = Profile::Where('introduce','LIKE',"%{$str}%")
        ->orWhere('artist','LIKE',"%{$str}%")
        ->orWhere('gender','LIKE',"%{$str}%")
        ->orWhere('age','LIKE',"%{$str}%")
        ->orWhere('place','LIKE',"%{$str}%")
        ->orWhere('music','LIKE',"%{$str}%")
        ->orWhereHas('user',function($query)use($str){
            $query->where('name',$str);
        });
    }

    public function scopePlace($query, $str)
    {
        return $profiles = Profile::Where('place',$str);
    }

    public function scopeAge($query, $str)
    {
        return $profiles = Profile::Where('age',$str);
    }

    public function scopeGenderplace($query, $str, $ttr)
    {
        return $profiles = Profile::Where('gender',$str)
        ->Where('place',$ttr);
    }

    public function scopeAgeplace($query, $str, $ttr)
    {
        return $profiles = Profile::Where('age',$str)
        ->Where('place',$ttr);
    }

    public function scopeGenderage($query, $str, $ttr)
    {
        return $profiles = Profile::Where('gender',$str)
        ->Where('age',$ttr);
    }

    public function scopeGendermusic($query, $str, $ttr)
    {
        return $profiles = Profile::Where('gender',$str)
        ->Where('music','LIKE',"%{$ttr}%");
    }

    public function scopeAgemusic($query, $str, $ttr)
    {
        return $profiles = Profile::Where('age',$str)
        ->Where('music','LIKE',"%{$ttr}%");
    }

    public function scopePlacemusic($query, $str, $ttr)
    {
        return $profiles = Profile::Where('place',$str)
        ->Where('music','LIKE',"%{$ttr}%");
    }

    public function scopePlacemusicage($query, $str, $ttr, $rtr)
    {
        return $profiles = Profile::Where('place',$str)
        ->Where('music','LIKE',"%{$ttr}%")
        ->Where('age',$rtr);
    }

    public function scopeAgeplacegender($query, $str, $ttr, $rtr)
    {
        return $profiles = Profile::Where('age',$str)
        ->Where('place',$ttr)
        ->Where('gender',$rtr);
    }

    public function scopePlacemusicgender($query, $str, $ttr, $rtr)
    {
        return $profiles = Profile::Where('place',$str)
        ->Where('music','LIKE',"%{$ttr}%")
        ->Where('gender',$rtr);
    }

    public function scopeAgemusicgender($query, $str, $ttr, $rtr)
    {
        return $profiles = Profile::Where('age',$str)
        ->Where('music','LIKE',"%{$ttr}%")
        ->Where('gender',$rtr);
    }

    public function scopeAgeplacemusicgender($query, $str, $ttr, $rtr, $vtr)
    {
        return $profiles = Profile::Where('age',$str)
        ->Where('place',$ttr)
        ->Where('music','LIKE',"%{$rtr}%")
        ->Where('gender',$vtr);
    }

}
