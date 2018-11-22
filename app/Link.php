<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Link extends Model
{
    public static function getLinks()
    {
        return DB::table('links')
            ->select('content', 'uses')
            ->get();
    }
}
