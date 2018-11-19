<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleTag extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function article()
    {
        return $this->belongsTo('App\Article');
    }
    public function tag()
    {
        return $this->belongsTo('App\Tag');
    }
}
