<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RefazAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('nascimento');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('uf');
            $table->string('estado_civil');
            $table->string('telefone_1');
            $table->string('telefone_2');
            $table->string('email');
            $table->string('email_responsavel');
            $table->string('dia_pagamento');
            $table->string('link_material');
            $table->string('situacao_cadastro');
            $table->string('aprovacao_cadastro');

            $table->unsignedBigInteger('entrevista_id');
            $table->foreign('entrevista_id')->references('id')->on('entrevistas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
