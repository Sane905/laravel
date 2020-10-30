<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['user_id','profile_id','body'];
    public function profile()
    {
        return $this->belongsTo('App\Profile','profile_id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
