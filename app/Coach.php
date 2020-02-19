<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    public $fillable = [
        'nome',
        'apelido',
        'endereco',
        'telefone',
        'email',
        'senha'
    ];

    public $timestamps = false;
}
