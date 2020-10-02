<?php

namespace App\Events;

use App\ContactEntry;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ContactEntrySent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public ContactEntry $contactEntry;

    public function __construct(ContactEntry $entry)
    {
        $this->contactEntry = $entry;
    }

}
