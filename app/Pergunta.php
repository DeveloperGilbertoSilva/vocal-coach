<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{
    protected $table = 'perguntas';

    public $fillable = ['descricao'];

    public $timestamps = false;

    public function entrevista()
    {
        return $this->belongsTo(Entrevista::class);
    }

}
