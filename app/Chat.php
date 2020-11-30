<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = ['send','recieve','message'];

    public function user()
    {
        return $this->belongsTo('App\User','send');
    }
}
