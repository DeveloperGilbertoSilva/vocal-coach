<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Midia extends Model
{
    protected $table = 'midias';

    public $fillable = [
        'titulo',
        'pasta',
        'arquivo'
    ];

    public $timestamps = false;
}
