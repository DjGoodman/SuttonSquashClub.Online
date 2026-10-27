<?php

namespace Tests\Feature;

use Tests\TestCase;

class StructuredDataTest extends TestCase
{
    public function test_pages_include_valid_club_structured_data(): void
    {
        $response = $this->get('/about');

        $response->assertOk();

        preg_match('/<script type=\'application\/ld\+json\'>(.*?)<\/script>/s', $response->getContent(), $matches);
        $data = json_decode($matches[1] ?? '', true);

        $this->assertIsArray($data, 'Structured data is not valid JSON');
        $this->assertSame('SportsClub', $data['@type']);
        $this->assertSame('Sutton Community Academy, Market Place', $data['address']['streetAddress']);
        $this->assertSame('NG17 1AQ', $data['address']['postalCode']);
        $this->assertStringNotContainsString('Lammas', $data['description']);
    }
}
