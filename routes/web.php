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

Route::get('/aluno', 'EntrevistaController@listar')->name('aluno');
Route::post('/aluno', 'AlunoController@armazenar');

Route::get('/entrevista', function(){
    return view('entrevista');
})->name('entrevista');

Route::post('entrevista', 'EntrevistaController@armazenar');
