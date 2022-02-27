<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PackagesTest extends TestCase
{
    use RefreshDatabase;

    private string $tgo_digital_services_url = 'https://buy.stripe.com/fZe6ot8F75zp3MAbII';
    /** @test anyone can be redirected to the TGO Digital Services payment page */
    public function anyone_can_be_redirected_to_the_tgo_digital_services_payment_page()
    {
        $response = $this->get('/packages/tgo-digital-services');
        $response->assertRedirect($this->tgo_digital_services_url);
    }
}
