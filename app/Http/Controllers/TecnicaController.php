<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TecnicaController extends Controller
{
    public function armazenar()
    {
        DB::beginTransaction();
            DB::table('tecnicas')->insert([

            ]);
        DB::commit();

    }
}
