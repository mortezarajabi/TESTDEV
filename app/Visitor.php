<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $guarded = [];

    public static function addNew($ip) {
        static::create([
            'ip' => $ip
        ]);
    }
}
