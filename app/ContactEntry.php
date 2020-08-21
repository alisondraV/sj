<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactEntry extends Model
{
    public function sendMessage()
    {
        $this->date_contacted = date('Y-m-d');
        $this->save();
    }
}
