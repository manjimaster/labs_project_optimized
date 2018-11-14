<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function projects_images()
    {
        return $this->belongsTo('App\ProjectImage', 'project_images_id');
    }
    public function icons()
    {
        return $this->belongsTo('App\Icon', 'icons_id');
    }
}
