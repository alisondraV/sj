<?php

namespace App\Mail;

use App\ContactEntry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEntryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $entry;

    public function __construct(ContactEntry $entry)
    {
        $this->entry = $entry;
    }


    public function build()
    {
        return $this->view('mail');
    }
}
