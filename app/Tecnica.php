<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnica extends Model
{
    public $fillable = [
        'descricao'
    ];

    public $timestamps = false;
}
