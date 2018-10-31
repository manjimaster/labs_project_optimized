<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function article_images()
    {
        return $this->belongsTo('App\ArticleImage');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag','articles_tags', 'article_id','tag_id');
    }
}
