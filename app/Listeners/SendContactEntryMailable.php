<?php

namespace App\Listeners;

use App\Events\ContactEntrySent;
use App\Mail\ContactEntryMail;
use Illuminate\Support\Facades\Mail;

class SendContactEntryMailable
{
    public function handle(ContactEntrySent $event)
    {
        Mail::to(config('contacts.email_to'))->queue(new ContactEntryMail($event->contactEntry));
    }
}
