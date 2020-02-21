<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FonoaudiologoController extends Controller
{
    public function armazenar()
    {
        DB::beginTransaction();
            DB::table('fonoaudiologos')->insert([

            ]);
        DB::commit();

    }
}
