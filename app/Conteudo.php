<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    protected $table = 'conteudos';

    public $fillable = [
        'descricao'
    ];

    public $timestamps = false;
}
