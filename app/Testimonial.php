<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    public function testimonial_images()
    {
        return $this->belongsTo('App\TestimonialImage');
    }
}
