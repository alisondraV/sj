<?php

namespace App\Http\Controllers;

use App\ContactEntry;
use App\Http\Requests\SendContactEntryRequest;
use App\Mail\ContactEntryMail;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class ContactEntryController extends Controller
{
    public function send(SendContactEntryRequest $request)
    {
        $newEntry = ContactEntry::sendMessage($request->validated());

        $mailJob = Mail::to(config('contacts.email_to'));
        $mailJob->queue(new ContactEntryMail($newEntry));

        return response()->json(Response::HTTP_CREATED);
    }
}
