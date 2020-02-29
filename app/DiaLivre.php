<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaLivre extends Model
{
    protected $table = 'dias_livres';

    public $fillable = [
        'data',
        'horario'
    ];

    public $timestamps = false;
}
