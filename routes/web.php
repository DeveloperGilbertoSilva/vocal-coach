<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// ALUNO
Route::get('/alunos', 'AlunoController@listarAlunos')->name('listar-alunos');
Route::get('/aluno/inserir', function(){
    return view('aluno.armazenar');
})->name('inserir-aluno');
Route::post('/aluno/inserir', 'AlunoController@armazenar');
Route::get('/aluno/alterar/{id}', 'AlunoController@listarAluno');
Route::post('/aluno/alterar/{id}', 'AlunoController@alterar');
Route::get('/aluno/excluir/{id}', 'AlunoController@excluir');

// AULAS

// CATEGORIAS

// CONTEUDO

// DIA_LIVRE

// DISCIPLINA

// ENTREVISTA
Route::post('/responder-entrevista', 'EntrevistaController@armazenar'); //redirecionamento para a página de resposta da entrevista

Route::get('/entrevista', function(){
    return view ('entrevista.armazenar');
}) -> name('entrevista');

Route::post('entrevista', 'EntrevistaController@armazenar');

// EVENTO

// EXERCICIO

// FINANCEIRO

// FONOAUDIOLOGO

// COACH

// MATRICULA

// MIDIA

// TECNICA

