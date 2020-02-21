<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisciplinaController extends Controller
{
    public function armazenar()
    {
        DB::beginTransaction();
            DB::table('disciplinas')->insert([

            ]);
        DB::commit();

    }
}
