<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'aulas';

    public $fillable = [
        'data',
        'tipo',
        'observacao'
    ];

    public $timestamps = false;

}
