<?php

namespace Tests\Feature;

use Tests\TestCase;

class HistoryTest extends TestCase
{
    public function test_history_page_is_available(): void
    {
        $response = $this->get('/history');

        $response->assertOk()
            ->assertSee('The Story of Sutton Squash Club')
            ->assertSee('The Early Days')
            ->assertSee('Overcoming Adversity')
            ->assertSee('Andy Hay made a welcome return as Head Coach and Junior Lead')
            ->assertSee('Nottinghamshire County Cup (B Grade)')
            ->assertSee('The Stronghold')
            ->assertSee('Looking to the Future');
    }

    public function test_about_page_links_to_history_page(): void
    {
        $response = $this->get('/about');

        $response->assertOk()
            ->assertSee('href="/history"', false);
    }
}
