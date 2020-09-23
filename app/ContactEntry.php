<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactEntry extends Model
{
    protected $fillable = [
        'name', 'email', 'message', 'date_contacted'
    ];

    public static function sendMessage(array $attributes)
    {
        $entry = static::query()->create($attributes);
        $entry->date_contacted = date('Y-m-d');
        $entry->save();

        return $entry;
    }
}
