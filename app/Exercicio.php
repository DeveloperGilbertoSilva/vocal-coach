<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    protected $table = 'exercicios';


    public $fillable = [
        'numero',
        'descricao'
    ];

    public $timestamps = false;
}
