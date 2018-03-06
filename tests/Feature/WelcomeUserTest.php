<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    function it_welcome_users_wiht_nickname()
    {
        $this->get('saludos/richard/draox')
          ->assertStatus(200)
          ->assertSee('Bienvenido richard, tu apodo es draox');
    }

    function it_welcome_users_wihtout_nickname()
    {
        $this->get('saludos/richard')
          ->assertStatus(200)
          ->assertSee('Bienvenido richard');
    }
}
