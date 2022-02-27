<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Inertia\Testing\AssertableInertia as Assert;
use Tests\TestCase;

class WelcomeTest extends TestCase
{
    use RefreshDatabase;

    /** @test anyone can access the welcome page */
    public function anyone_can_access_the_welcome_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test the welcome page is coming soon */
    public function the_welcome_page_is_coming_soon()
    {
        $response = $this->get('/');

        $response->assertInertia(fn(Assert $page) => $page
            ->component('ComingSoon')
        );
    }
}
