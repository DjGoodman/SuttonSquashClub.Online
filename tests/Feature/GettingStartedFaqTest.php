<?php

namespace Tests\Feature;

use Tests\TestCase;

class GettingStartedFaqTest extends TestCase
{
    public function test_getting_started_faq_page_shows_beginner_resources_and_club_information(): void
    {
        $response = $this->get('/getting-started');

        $response->assertOk()
            ->assertSee('Getting Started with Squash')
            ->assertSee('find.playsquash.org')
            ->assertSee('squashskills.com')
            ->assertSee('7:00 to 8:20 PM')
            ->assertSee('1st and 3rd Wednesday')
            ->assertSee('app.squashlevels.com/box?clubid=5991')
            ->assertSee('SCA-leisure@attrust.org.uk')
            ->assertSee('01623 980055')
            ->assertSee('my.schoolbookings.co.uk/users/sign_in')
            ->assertSee('contact@suttonsquash.club')
            ->assertSee('How do I enter a tournament?')
            ->assertSee('mtevents.org')
            ->assertSee('matchpointsport.co.uk')
            ->assertSee('cmstringers.com/entry/')
            ->assertDontSee('first session free');
    }

    public function test_getting_started_faq_is_linked_from_navigation(): void
    {
        $this->get('/getting-started')
            ->assertOk()
            ->assertSee('href="/getting-started"')
            ->assertSee('Getting Started FAQ');
    }

    public function test_about_page_links_to_key_club_information_pages(): void
    {
        $this->get('/about')
            ->assertOk()
            ->assertSee('About Sutton Squash Club')
            ->assertSee('href="/getting-started"')
            ->assertSee('href="/team-squash-faq"')
            ->assertSee('href="/findus"')
            ->assertSee('Sutton Community Academy');
    }

    public function test_social_sessions_do_not_advertise_a_free_first_session(): void
    {
        $this->get('/social')
            ->assertOk()
            ->assertDontSee('First Session Free')
            ->assertDontSee('first session completely free');
    }
}
