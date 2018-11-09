<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function projects_images()
    {
        return $this->belongsTo('App\ProjectImage', 'project_images_id');
    }
}
