<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AulaController extends Controller
{
    public function armazenar()
    {
        DB::beginTransaction();
            DB::table('aulas')->insert([
                
            ]);
        DB::commit();

    }
}
