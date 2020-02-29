<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $table = 'disciplinas';

    public $fillable = [
        'descricao'
    ];

    public $timestamps = false;
}
