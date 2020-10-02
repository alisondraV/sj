<?php

namespace App\Http\Controllers;

use App\ContactEntry;
use App\Events\ContactEntrySent;
use App\Http\Requests\SendContactEntryRequest;
use Illuminate\Http\Response;

class ContactEntryController extends Controller
{
    public function store(SendContactEntryRequest $request)
    {
        $newEntry = ContactEntry::sendMessage($request->validated());
        ContactEntrySent::dispatch($newEntry);
        return response()->json($newEntry, Response::HTTP_CREATED);
    }
}
