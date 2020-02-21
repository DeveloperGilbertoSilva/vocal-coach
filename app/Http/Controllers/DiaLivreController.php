<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiaLivreController extends Controller
{
    public function armazenar()
    {
        DB::beginTransaction();
            DB::table('dias_livres')->insert([

            ]);
        DB::commit();

    }
}
