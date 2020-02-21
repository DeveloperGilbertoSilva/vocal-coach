<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MidiaController extends Controller
{
    public function armazenar()
    {
        DB::beginTransaction();
            DB::table('midias')->insert([

            ]);
        DB::commit();

    }
}
