<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fonoaudiologo extends Model
{
    protected $table = 'fonoaudiologos';

    public $fillable = [
        'data_atendimento',
        'medico',
        'clinica',
        'observacao'
    ];

    public $timestamps = false;
}
