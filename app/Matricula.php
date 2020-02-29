<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matriculas';

    public $fillable = [
        'data_inicio',
        'data_fim',
        'horario',
        'tipo_aluno',
        'quantidade_aulas',
        'tipo_aula',
        'valor_mensal',
        'observacao_inicial',
        'observacao_final'
    ];

    public $timestamps = false;
}
