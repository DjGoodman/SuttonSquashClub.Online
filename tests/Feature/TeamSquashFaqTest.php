<?php

namespace Tests\Feature;

use Tests\TestCase;

class TeamSquashFaqTest extends TestCase
{
    public function test_team_squash_faq_page_is_available(): void
    {
        $response = $this->get('/team-squash-faq');

        $response->assertOk()
            ->assertSee('Team Squash FAQ')
            ->assertSee('Membership')
            ->assertSee('Matches')
            ->assertSee('Team Selection')
            ->assertSee('Kit');
    }
}
