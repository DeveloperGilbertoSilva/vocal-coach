<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financeiro extends Model
{
    public $fillable = [
        'tipo',
        'forma',
        'data',
        'mes_referencia',
        'descricao',
        'valor',
        'observacao'
    ];

    public $timestamps = false;
}
