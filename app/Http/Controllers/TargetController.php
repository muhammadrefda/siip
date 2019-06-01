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

    public function simpan(Request $request){
        DB::table('tb_target')->insert(['id_target'=>$request->id,'nama'=>$request->nama,'target'=>$request->target]);
        return redirect('/target');
    }

    public function edit($id){
        $data= DB::table('tb_target')->where('id_target', $id)->get();
        return view('targetedit', ['data'=>$data]);
    }

    public function update(Request $request){
        DB::table('tb_target')->where('id_target', $request->id)->update([
            'nama'=>$request->nama,
            'target'=>$request->target
        ]);
        return redirect('/target');
    }

    public function hapus($id){
        DB::table('tb_target')->where('id_target', $id)->delete();
        return redirect('/target');

    }
}
