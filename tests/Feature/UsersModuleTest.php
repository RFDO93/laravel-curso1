<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * @test
     */
    function it_loads_the_users_list_page()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Usuarios');
    }

    function it_loads_the_users_details_page()
    {
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('Detalle del usuario con el id: 5');
    }

    function it_loads_the_users_new_page()
    {
        $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('Crear Nuevo usuario');
    }

    function it_loads_the_users_edit_page()
    {
        $this->get('/usuarios/editar/5')
        ->assertStatus(200)
        ->assertSee('Editar usuario con el id: 5');
    }

}
