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
        return $profiles = Profile::where('user_id' ,'<>' , Auth::id());
    }

    public function scopeKey($query, $keyword)
    {
        return $query->Where('introduce','LIKE',"%{$keyword}%")
        ->orWhere('artist','LIKE',"%{$keyword}%")
        ->orWhere('gender','LIKE',"%{$keyword}%")
        ->orWhere('age','LIKE',"%{$keyword}%")
        ->orWhere('place','LIKE',"%{$keyword}%")
        ->orWhere('music','LIKE',"%{$keyword}%")
        ->orWhereHas('user',function($query)use($keyword){
            $query->where('name',$keyword);
        });
    }


}
