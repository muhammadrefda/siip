<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TargetController extends Controller
{
    public function index(){
        $target = DB::table('tb_target')->get();
        return view('target', ['target'=>$target]);
    }
}
