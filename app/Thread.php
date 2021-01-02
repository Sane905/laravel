<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $guarded = array('id');

    public function post_list()
    {
        return $this->hasMany('App\Post', 'thread_id','id')
            ->orderBy('created_at');
    }
}
