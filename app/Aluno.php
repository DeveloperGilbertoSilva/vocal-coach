<?php

namespace App;

use App\Scopes\OrderByName;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public $fillable = [
        'nome',
        'nascimento',
        'endereco',
        'cidade',
        'uf',
        'estado_civil',
        'telefone_1',
        'telefone_2',
        'email',
        'email_responsavel',
        'dia_pagamento',
        'link_material',
        'situacao_cadastro',
        'aprovacao_cadastro',
        'entrevista_id',
    ];

    public $timestamps = false;

    public function entrevista(){
        return $this->belongsTo(Entrevista::class);
    }

    public function scopeListaOrdenandoNome($query){
        return $query->orderBy('nome');
    }

    // protected static function boot(){
    //     parent::boot();
    //     static::addGlobalScope(new OrderByName);
    // }
}
