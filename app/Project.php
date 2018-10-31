<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function users_images()
    {
        return $this->belongsTo('App\ProjectsImage');
    }
}
