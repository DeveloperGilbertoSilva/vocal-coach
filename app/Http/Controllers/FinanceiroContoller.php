<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceiroContoller extends Controller
{
    public function armazenar()
    {
        DB::beginTransaction();
            DB::table('financeiros')->insert([

            ]);
        DB::commit();

    }
}
