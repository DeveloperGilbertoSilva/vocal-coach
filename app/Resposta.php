<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    protected $table = 'respostas';

    public $fillable = ['resposta'];

    public $timestamps = false;
}