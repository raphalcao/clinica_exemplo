<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouterTest extends TestCase
{
    
    public function testRouteIndex()
    {
        $response = $this->get('/')
            ->assertStatus(200);
    }


    // Os testes abaixo apresentam o Status 404 por não estarem autenticados com o toking no momento da execução.

    public function testRouteStore()
    {
        $response = $this->post('/agendamento')
            ->assertStatus(404);
    }

    public function testRouteGetProfissionais()
    {
        $response = $this->get('profissionais/13')
            ->assertStatus(404);
    }

    public function testRouteGetIndicacao()
    {
        $response = $this->get('/indicacao')
            ->assertStatus(404);
    }
}
