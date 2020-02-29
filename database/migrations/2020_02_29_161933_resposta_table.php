<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RespostaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('resposta');

            $table->unsignedBigInteger('pergunta_id');
            $table->unsignedBigInteger('entrevista_id');

            $table->foreign('pergunta_id')->references('id')->on('perguntas');
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
