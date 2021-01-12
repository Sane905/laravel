<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = [
        'meeting_id',
        'topic',
        'agenda',
        'start_time',
        'start_url',
        'join_url',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
