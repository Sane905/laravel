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
        return $profiles = Profile::where('gender',$str)->get();
    }

    public function scopeMusic($query, $str)
    {
        return $profiles = Profile::where('music','LIKE',"%{$str}%")->where('user_id','<>',Auth::id())->paginate(4);
    }

    public function scopeKeyword($query, $str)
    {
        return $profiles = Profile::where('introduce','LIKE',"%{$str}%")
        ->orwhere('artist','LIKE',"%{$str}%")
        ->orwhere('gender','LIKE',"%{$str}%")
        ->orwhere('age','LIKE',"%{$str}%")
        ->orwhere('place','LIKE',"%{$str}%")
        ->orwhere('music','LIKE',"%{$str}%")
        ->orwhereHas('user',function($query)use($str){
            $query->where('name',$str);
        })->where('user_id','<>',Auth::id())->paginate(4);
    }

    public function scopePlace($query, $str)
    {
        return $profiles = Profile::where('place',$str)->where('user_id','<>',Auth::id())->paginate(4);
    }

    public function scopeAge($query, $str)
    {
        return $profiles = Profile::where('age',$str)->where('user_id','<>',Auth::id())->paginate(4);
    }

    public function scopeGenderplace($query, $str, $ttr)
    {
        return $profiles = Profile::where('gender',$str)
        ->where('place',$ttr)->where('user_id','<>',Auth::id())->paginate(4);
    }

    public function scopeAgeplace($query, $str, $ttr)
    {
        return $profiles = Profile::where('age',$str)
        ->where('place',$ttr)->where('user_id','<>',Auth::id())->paginate(4);
    }

    public function scopeGenderage($query, $str, $ttr)
    {
        return $profiles = Profile::where('gender',$str)
        ->where('age',$ttr)->where('user_id','<>',Auth::id())->paginate(4);
    }

    public function scopeGendermusic($query, $str, $ttr)
    {
        return $profiles = Profile::where('gender',$str)
        ->where('music','LIKE',"%{$ttr}%")->where('user_id','<>',Auth::id())->paginate(4);
    }

    public function scopeAgemusic($query, $str, $ttr)
    {
        return $profiles = Profile::where('age',$str)
        ->where('music','LIKE',"%{$ttr}%")->where('user_id','<>',Auth::id())->paginate(4);
    }

    public function scopePlacemusic($query, $str, $ttr)
    {
        return $profiles = Profile::where('place',$str)
        ->where('music','LIKE',"%{$ttr}%")->where('user_id','<>',Auth::id())->paginate(4);
    }

    public function scopePlacemusicage($query, $str, $ttr, $rtr)
    {
        return $profiles = Profile::where('place',$str)
        ->where('music','LIKE',"%{$ttr}%")
        ->where('age',$rtr)->where('user_id','<>',Auth::id())->paginate(4);
    }

    public function scopeAgeplacegender($query, $str, $ttr, $rtr)
    {
        return $profiles = Profile::where('age',$str)
        ->where('place',$ttr)
        ->where('gender',$rtr)->where('user_id','<>',Auth::id())->paginate(4);
    }

    public function scopePlacemusicgender($query, $str, $ttr, $rtr)
    {
        return $profiles = Profile::where('place',$str)
        ->where('music','LIKE',"%{$ttr}%")
        ->where('gender',$rtr)->where('user_id','<>',Auth::id())->paginate(4);
    }

    public function scopeAgemusicgender($query, $str, $ttr, $rtr)
    {
        return $profiles = Profile::where('age',$str)
        ->where('music','LIKE',"%{$ttr}%")
        ->where('gender',$rtr)->where('user_id','<>',Auth::id())->paginate(4);
    }

    public function scopeAgeplacemusicgender($query, $str, $ttr, $rtr, $vtr)
    {
        return $profiles = Profile::where('age',$str)
        ->where('place',$ttr)
        ->where('music','LIKE',"%{$rtr}%")
        ->where('gender',$vtr)->where('user_id','<>',Auth::id())->paginate(4);
    }

}
