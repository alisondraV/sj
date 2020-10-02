<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class ContactEntry extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'message', 'date_contacted'
    ];

    public static function sendMessage(array $attributes)
    {
        $date = date('M d, Y');

        return static::query()->create(
                array_merge($attributes, [
                'date_contacted' => $date
            ])
        );
    }
}
