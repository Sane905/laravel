<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = array('id');

    protected $touches = ['thread'];
    public function thread()
    {
        return $this->belongsTo('App\Thread');
    }
}
