<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoachController extends Controller
{
    public function armazenar()
    {
        DB::beginTransaction();
            DB::table('coachs')->insert([

            ]);
        DB::commit();

    }
}
