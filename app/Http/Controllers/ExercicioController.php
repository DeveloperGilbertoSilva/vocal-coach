<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExercicioController extends Controller
{
    public function armazenar()
    {
        DB::beginTransaction();
            DB::table('exercicios')->insert([

            ]);
        DB::commit();

    }
}
