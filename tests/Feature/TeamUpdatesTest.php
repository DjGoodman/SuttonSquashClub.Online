<?php

namespace Tests\Feature;

use Tests\TestCase;

class TeamUpdatesTest extends TestCase
{
    public function test_team_updates_page_shows_fixtures_and_social_links(): void
    {
        $response = $this->get('/teams');

        $response->assertOk()
            ->assertSee('Follow Our Teams')
            ->assertSee('https://nottssquash.leaguemanagersq.com/?')
            ->assertSee('https://www.facebook.com/suttonsquash')
            ->assertSee('https://www.instagram.com/sutton_squash_club/?hl=en');
    }
}
