<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function armazenar()
    {
        DB::beginTransaction();
            DB::table('categorias')->insert([

            ]);
        DB::commit();

    }
}
