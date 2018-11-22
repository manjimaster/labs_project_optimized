<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class CarouselImage extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public static function getImages()
    {
        return DB::table('carousel_images')
            ->select('image_url')
            ->where('deleted_at', '=', null)
            ->get();
    }
}
