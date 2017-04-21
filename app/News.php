<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'content', 'previllage', 'user_id','status','type'];

    public $timestamps = true;

    function images()
    {
        return $this->hasMany('App\Image', 'news_id', 'id');
    }

    function comments()
    {
        return $this->hasMany('App\Comment', 'news_id', 'id')->orderBy('created_at', 'DESC');
    }

    function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
