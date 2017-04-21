<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['news_id', 'comment', 'user_id'];

    function user()
    {
        return $this->belongsTo('App\User');
    }
}
