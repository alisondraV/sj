<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactEntry extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'message', 'date_contacted'
    ];

    public static function sendMessage(array $attributes)
    {
        return static::query()->create(
                array_merge($attributes, [
                'date_contacted' => today()->toDateString()
            ])
        );
    }
}
