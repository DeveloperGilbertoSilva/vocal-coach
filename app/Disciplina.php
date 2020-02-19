<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public $fillable = [
        'descricao'
    ];

    public $timestamps = false;
}
