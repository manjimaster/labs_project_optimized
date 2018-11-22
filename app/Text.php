<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Text extends Model
{
    public static function getTexts()
    {
        return DB::table('texts')
            ->select('content_p1', 'content_p2', 'content_p3', 'uses')
            ->get();
    }
}
