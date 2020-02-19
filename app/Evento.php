<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    public $fillable = [
        'titulo',
        'data',
        'horario',
        'local',
        'descricao'
    ];

    public $timestamps = false;
}
