<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaLivre extends Model
{
    public $fillable = [
        'data',
        'horario'
    ];

    public $timestamps = false;
}
