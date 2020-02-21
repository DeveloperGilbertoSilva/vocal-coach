<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
{
    public function armazenar()
    {
        DB::beginTransaction();
            DB::table('eventos')->insert([

            ]);
        DB::commit();

    }
}
