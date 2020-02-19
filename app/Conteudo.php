<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    public $fillable = [
        'descricao'
    ];

    public $timestamps = false;
}
