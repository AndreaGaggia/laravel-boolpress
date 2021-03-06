<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'body', 'author', 'published_at', 'cat_id'];

    public function category()
    {
        return $this->belongsTo('App\Category', 'cat_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
