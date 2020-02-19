<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrevista extends Model
{
    public $fillable = ['pergunta'];

    public $timestamps = false;

    public function alunos(){
        return $this->hasMany(Aluno::class);
    }
}
