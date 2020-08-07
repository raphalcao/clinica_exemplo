<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [
        'specialty_id', 
        'professional_id', 
        'name', 
        'cpf', 
        'source_id', 
        'birthdate', 
        'date_time'
    ];

    protected $table = 'Agendas';

    public $timestamps = false;

}