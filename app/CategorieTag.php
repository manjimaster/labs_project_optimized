<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategorieTag extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function article()
    {
        return $this->belongsTo('App\Article');
    }
    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }
}
