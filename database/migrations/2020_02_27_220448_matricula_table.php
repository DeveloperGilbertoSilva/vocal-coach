<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MatriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('data_inicio');
            $table->string('data_fim');
            $table->string('horario');
            $table->string('tipo_aluno');
            $table->string('quantidade_aulas');
            $table->string('tipo_aula');
            $table->string('valor_mensal');
            $table->string('observacao_inicial');
            $table->string('observacao_final');

            $table->unsignedBigInteger('aluno_id')->nullable();
            $table->foreign('aluno_id')->references('id')->on('alunos');
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
