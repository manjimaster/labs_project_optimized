<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Service extends Model
{
    public function icons()
    {
        return $this->belongsTo('App\Icon', 'icons_id');
    }
    public static function getServices()
    {
        return DB::table('services')
            ->join('icons', 'services.icons_id', '=', 'icons.id')
            ->select('services.name', 'content', 'icons.class');
    }
}
