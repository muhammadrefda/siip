<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $supplier = DB::table('tb_supplier')->get();
        return view('supplier',['supplier'=>$supplier]);
    }

    public function simpan(Request $request){
        DB::table('tb_supplier')->insert([
            'id_supplier' => $request->id,
            'nama_supplier' => $request->nama,
            'alamat' => $request->alamat,
            'no_tlp' => $request->notlp,
            'email' => $request->email,
            'penanggung_jawab' => $request->pj
            
        ]);
        return redirect('/supplier');
    }

    public function hapus($id){
        DB::table('tb_supplier')->where('id_supplier', $id)->delete();
        return redirect('/supplier');
    }

    public function update(Request $request){
        DB::table('tb_supplier')->where('id_supplier', $request->id)->update([
            'nama_supplier' => $request->nama,
            'alamat' => $request->alamat,
            'no_tlp' => $request->notlp,
            'email' => $request->email,
            'penanggung_jawab' => $request->pj]);
            return redirect('/supplier');

        return $id;
    }

    public function edit($id){
        $datanya = DB::table('tb_supplier')->where('id_supplier', $id)->get();
        return view('supplieredit', ['data' => $datanya]);

    }
}
