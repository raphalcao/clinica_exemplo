<?php

namespace Tests\Feature;

use App\Agenda;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AgendaTest extends TestCase
{

    public function test_check_colunas_corretas()
    {
        $agenda = new Agenda();

        $expected = [
            'specialty_id',
            'professional_id',
            'name',
            'cpf',
            'source_id',
            'birthdate',
            'date_time'
        ];

        $arrayCompared = array_diff($expected, $agenda->getFillable());

        //dd($arrayCompared);

        $this->assertEquals(0, count($arrayCompared));
    }
}
