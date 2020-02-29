<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    public $fillable = [
        'descricao'
    ];

    public $timestamps = false;
}
