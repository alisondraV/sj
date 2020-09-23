<?php

namespace Tests\Feature;

use App\ContactEntry;
use \Illuminate\Http\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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

    public function testItSetsTheDateContacted()
    {
        $this->postJson(route('contact-entry.send'), $this->validEntry)
            ->assertStatus(Response::HTTP_CREATED);

        $entry = ContactEntry::all()->first();
        $this->assertEquals(date('Y-m-d'), $entry->date_contacted);
    }

    public function testItSendsEntryEmail()
    {
        $response = $this->get('/send');

        $response->assertStatus(200);
    }
}
