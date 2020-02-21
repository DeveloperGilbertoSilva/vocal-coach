<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatriculaController extends Controller
{
    public function armazenar()
    {
        DB::beginTransaction();
            DB::table('matriculas')->insert([

            ]);
        DB::commit();

    }
}
