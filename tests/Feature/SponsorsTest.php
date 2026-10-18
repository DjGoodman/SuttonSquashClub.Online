<?php

namespace Tests\Feature;

use Tests\TestCase;

class SponsorsTest extends TestCase
{
    public function test_sponsors_page_shows_sponsorship_opportunities_and_contact_email(): void
    {
        $response = $this->get('/sponsors');

        $response->assertOk()
            ->assertSee('Sponsor Sutton Squash Club')
            ->assertSee('club sessions')
            ->assertSee('team kit')
            ->assertSee('contact@suttonsquash.club')
            ->assertSee('mailto:contact@suttonsquash.club')
            ->assertSee('href="/sponsors"', false);
    }
}
