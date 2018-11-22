<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{
    public static function getContacts($id)
    {
        return DB::table('contacts')
            ->select('title_1', 'content', 'title_2', 'address_1', 'address_2', 'phone_1', 'email_1')
            ->first();
    }
}
