<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Testimonial extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function testimonial_images()
    {
        return $this->belongsTo('App\TestimonialImage', 'testimonial_images_id');
    }
    public static function getTestimonials()
    {
        return DB::table('testimonials')
            ->join('testimonial_images', 'testimonials.testimonial_images_id', '=', 'testimonial_images.id')
            ->select('content', 'name', 'position', 'testimonial_images.image_url_1')
            ->get();
    }
}
