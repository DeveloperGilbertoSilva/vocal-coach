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

Route::get('/aluno/inserir', 'AlunoController@inserir');
Route::post('/aluno/inserir', 'AlunoController@armazenar');

Route::get('/aluno/alterar/{id}', 'AlunoController@listarAluno');
Route::post('/aluno/alterar/{id}', 'AlunoController@alterar');

Route::get('/aluno/excluir/{id}', 'AlunoController@excluir');
//====================================================================


// AULAS
Route::get('/aulas', 'AulaController@listarAulas')->name('listar-aulas');

Route::get('/aula/inserir', 'AulaController@inserir');
Route::post('/aula/inserir', 'AulaController@armazenar');

Route::get('/aula/alterar/{id}', 'AulaController@listarAula');
Route::post('/aula/alterar/{id}', 'AulaController@alterar');

Route::get('/aula/excluir/{id}', 'AulaController@excluir');
//====================================================================


// CATEGORIAS
Route::get('/categorias', 'CategoriaController@listarCategorias')->name('listar-categorias');

Route::get('/categoria/inserir', 'CategoriaController@inserir');
Route::post('/categoria/inserir', 'CategoriaController@armazenar');

Route::get('/categoria/alterar/{id}', 'CategoriaController@listarCategoria');
Route::post('/categoria/alterar/{id}', 'CategoriaController@alterar');

Route::get('/categoria/excluir/{id}', 'CategoriaController@excluir');
//====================================================================


// CONTEUDO
Route::get('/conteudos', 'ConteudoController@listarConteudos')->name('listar-conteudos');

Route::get('/conteudo/inserir', 'ConteudoController@inserir');
Route::post('/conteudo/inserir', 'ConteudoController@armazenar');

Route::get('/conteudo/alterar/{id}', 'ConteudoController@listarConteudo');
Route::post('/conteudo/alterar/{id}', 'ConteudoController@alterar');

Route::get('/conteudo/excluir/{id}', 'ConteudoController@excluir');
//====================================================================


// DIA_LIVRE
Route::get('/dias_livres', 'DiaLivreController@listarDiasLivres')->name('listar-dias_livres');

Route::get('/dia_livre/inserir', 'DiaLivreController@inserir');
Route::post('/dia_livre/inserir', 'DiaLivreController@armazenar');

Route::get('/dia_livre/alterar/{id}', 'DiaLivreController@listarDiaLivre');
Route::post('/dia_livre/alterar/{id}', 'DiaLivreController@alterar');

Route::get('/dia_livre/excluir/{id}', 'DiaLivreController@excluir');
//====================================================================


// DISCIPLINA
Route::get('/disciplinas', 'DisciplinaController@listarDisciplinas')->name('listar-disciplinas');

Route::get('/disciplina/inserir', 'DisciplinaController@inserir');
Route::post('/disciplina/inserir', 'DisciplinaController@armazenar');

Route::get('/disciplina/alterar/{id}', 'DisciplinaController@listarDisciplina');
Route::post('/disciplina/alterar/{id}', 'DisciplinaController@alterar');

Route::get('/disciplina/excluir/{id}', 'DisciplinaController@excluir');
//====================================================================


//======================================================QUESTIONÁRIO======================================================
// ENTREVISTA
Route::get('/entrevista/inserir', 'EntrevistaController@inserir')->name('entrevista');
Route::post('/entrevista/inserir', 'EntrevistaController@armazenar');
//====================================================================

// PERGUNTA
Route::get('/perguntas', 'PerguntaController@listarPerguntas')->name('listar-perguntas');

Route::get('/pergunta/inserir', 'PerguntaController@inserir');
Route::post('/pergunta/inserir', 'PerguntaController@armazenar');

Route::get('/pergunta/alterar/{id}', 'PerguntaController@listarPergunta');
Route::post('/pergunta/alterar/{id}', 'PerguntaController@alterar');

Route::get('/pergunta/excluir/{id}', 'PerguntaController@excluir');
//====================================================================

// RESPOSTA
Route::get('/respostas', 'RespostaController@listarRespostas')->name('listar-respostas');

Route::get('/resposta/inserir', 'RespostaController@inserir');
Route::post('/resposta/inserir', 'RespostaController@armazenar');

Route::get('/resposta/alterar/{id}', 'RespostaController@listarResposta');
Route::post('/resposta/alterar/{id}', 'RespostaController@alterar');

Route::get('/resposta/excluir/{id}', 'RespostaController@excluir');
//=========================================================================================================================


// EVENTO
Route::get('/eventos', 'EventoController@listarEventos')->name('listar-eventos');

Route::get('/evento/inserir', 'EventoController@inserir');
Route::post('/evento/inserir', 'EventoController@armazenar');

Route::get('/evento/alterar/{id}', 'EventoController@listarEvento');
Route::post('/evento/alterar/{id}', 'EventoController@alterar');

Route::get('/evento/excluir/{id}', 'EventoController@excluir');
//====================================================================


// EXERCICIO
Route::get('/exercicios', 'ExercicioController@listarExercicios')->name('listar-exercicios');

Route::get('/exercicio/inserir', 'ExercicioController@inserir');
Route::post('/exercicio/inserir', 'ExercicioController@armazenar');

Route::get('/exercicio/alterar/{id}', 'ExercicioController@listarExercicio');
Route::post('/exercicio/alterar/{id}', 'ExercicioController@alterar');

Route::get('/exercicio/excluir/{id}', 'ExercicioController@excluir');
//====================================================================


// FINANCEIRO
Route::get('/financeiros', 'FinanceiroController@listarFinanceiros')->name('listar-financeiros');

Route::get('/financeiro/inserir', 'FinanceiroController@inserir');
Route::post('/financeiro/inserir', 'FinanceiroController@armazenar');

Route::get('/financeiro/alterar/{id}', 'FinanceiroController@listarFinanceiro');
Route::post('/financeiro/alterar/{id}', 'FinanceiroController@alterar');

Route::get('/financeiro/excluir/{id}', 'FinanceiroController@excluir');
//====================================================================


// FONOAUDIOLOGO
Route::get('/fonoaudiologos', 'FonoaudiologoController@listarFonoaudiologos')->name('listar-fonoaudiologos');

Route::get('/fonoaudiologo/inserir', 'FonoaudiologoController@inserir');
Route::post('/fonoaudiologo/inserir', 'FonoaudiologoController@armazenar');

Route::get('/fonoaudiologo/alterar/{id}', 'FonoaudiologoController@listarFonoaudiologo');
Route::post('/fonoaudiologo/alterar/{id}', 'FonoaudiologoController@alterar');

Route::get('/fonoaudiologo/excluir/{id}', 'FonoaudiologoController@excluir');
//====================================================================


// COACH
Route::get('/coachs', 'CoachController@listarCoachs')->name('listar-coachs');

Route::get('/coach/inserir', 'CoachController@inserir');
Route::post('/coach/inserir', 'CoachController@armazenar');

Route::get('/coach/alterar/{id}', 'CoachController@listarCoach');
Route::post('/coach/alterar/{id}', 'CoachController@alterar');

Route::get('/coach/excluir/{id}', 'CoachController@excluir');
//====================================================================


// MATRICULA
Route::get('/matriculas', 'MatriculaController@listarMatriculas')->name('listar-matriculas');

Route::get('/matricula/inserir', 'MatriculaController@inserir');
Route::post('/matricula/inserir', 'MatriculaController@armazenar');

Route::get('/matricula/alterar/{id}', 'MatriculaController@listarMatricula');
Route::post('/matricula/alterar/{id}', 'MatriculaController@alterar');

Route::get('/matricula/excluir/{id}', 'MatriculaController@excluir');
//====================================================================


// MIDIA
Route::get('/midias', 'MidiaController@listarMidias')->name('listar-midias');

Route::get('/midia/inserir', 'MidiaController@inserir');
Route::post('/midia/inserir', 'MidiaController@armazenar');

Route::get('/midia/alterar/{id}', 'MidiaController@listarMidia');
Route::post('/midia/alterar/{id}', 'MidiaController@alterar');

Route::get('/midia/excluir/{id}', 'MidiaController@excluir');
//====================================================================


// TECNICA
Route::get('/tecnicas', 'TecnicaController@listarTecnicas')->name('listar-tecnicas');

Route::get('/tecnica/inserir', 'TecnicaController@inserir');
Route::post('/tecnica/inserir', 'TecnicaController@armazenar');

Route::get('/tecnica/alterar/{id}', 'TecnicaController@listarTecnica');
Route::post('/tecnica/alterar/{id}', 'TecnicaController@alterar');

Route::get('/tecnica/excluir/{id}', 'TecnicaController@excluir');
//====================================================================
