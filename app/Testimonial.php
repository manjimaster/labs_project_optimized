<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function testimonial_images()
    {
        return $this->belongsTo('App\TestimonialImage', 'testimonial_images_id');
    }
}
