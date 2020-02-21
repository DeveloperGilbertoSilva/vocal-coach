<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConteudoController extends Controller
{
    public function armazenar()
    {
        DB::beginTransaction();
            DB::table('conteudos')->insert([

            ]);
        DB::commit();

    }
}
