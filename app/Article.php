<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function article_images()
    {
        return $this->belongsTo('App\ArticleImage', 'article_images_id');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'articles_tags', 'article_id', 'tag_id');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Categorie', 'articles_categories', 'article_id', 'categorie_id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
