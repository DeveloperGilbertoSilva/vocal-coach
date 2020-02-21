<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlunosTable2102V1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('nascimento');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('uf');
            $table->string('estado_civil');
            $table->string('telefone_1');
            $table->string('telefone_2')->nullable();
            $table->string('email');
            $table->string('email_responsavel')->nullable();
            $table->string('dia_pagamento');
            $table->string('link_material')->nullable();
            $table->string('situacao_cadastro');
            $table->string('aprovacao_cadastro');

            $table->unsignedBigInteger('entrevista_id')->nullable();
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
