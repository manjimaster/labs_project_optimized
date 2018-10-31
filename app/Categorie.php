<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function articles()
    {
        return $this->belongsToMany('App\Article', 'articles_categories', 'categorie_id', 'article_id');
    }
}
