<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = array('id');

    protected $touches = ['thread'];
    public function thread()
    {
        return $this->belongsTo('App\Thread','thread_id');
    }

    public function post_user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
