<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Midia extends Model
{
    public $fillable = [
        'titulo',
        'pasta',
        'arquivo'
    ];

    public $timestamps = false;
}
