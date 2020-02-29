<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrevista extends Model
{
    protected $table = 'entrevistas';

    public $fillable = ['titulo'];

    public $timestamps = false;

    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }

    public function perguntas()
    {
        return $this->hasMany(Pergunta::class);
    }
}
