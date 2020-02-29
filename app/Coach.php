<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $table = 'coachs';

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
