<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnica extends Model
{
    protected $table = 'tecnicas';

    public $fillable = [
        'descricao'
    ];

    public $timestamps = false;
}
