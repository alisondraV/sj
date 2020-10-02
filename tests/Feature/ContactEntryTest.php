<?php

namespace Tests\Feature;

use App\ContactEntry;
use App\Mail\ContactEntryMail;
use \Illuminate\Http\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactEntryTest extends TestCase
{
    use RefreshDatabase;

    public $validEntry = [
        'name' => 'Alisa Vynohradova',
        'email' => 'alice@gmail.com',
        'message' => 'Please repaint my living room',
    ];

    public function testItSendsEntryEmail()
    {
        Mail::fake();

        $this->postJson(route('contact-entry.send'), $this->validEntry)
            ->assertStatus(Response::HTTP_CREATED);

        $entry = ContactEntry::first();
        $this->assertEquals(today()->toDateString(), $entry->date_contacted);

        Mail::assertQueued(ContactEntryMail::class);
    }
}
