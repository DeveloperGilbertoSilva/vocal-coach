<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    public $fillable = [
        'numero',
        'descricao'
    ];

    public $timestamps = false;
}
