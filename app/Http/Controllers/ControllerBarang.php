<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelBarang;

class ControllerBarang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelBarang::all(); //
        return view('barang',compact('data')); //ganti return viewnya 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Barang_Create');//tingal di ganti return viewnya
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelBarang();  //
        $data->nama_barang = $request->nama_barang;
        $data->stok = $request->stok;
        $data->deskripsi_barang = $request->deskripsi_barang;
        $data->tgl_kadaluarsa =$request->tgl_kadaluarsa;
        $data->tgl_dibuat =$request->tgl_dibuat;
        $data->id_supplier = $request->id_supplier;

        $data->save();

        return redirect()->route('barang.index'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ModelBarang::where('id',$id)->get();    //
        return view('Edit_Barang',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ModelBarang::where('id',$id)->first();  //
        $data->nama_barang = $request->nama_barang;
        $data->stok = $request->stok;
        $data->deskripsi_barang = $request->deskripsi_barang;
        $data->tgl_kadaluarsa =$request->tgl_kadaluarsa;
        $data->tgl_dibuat =$request->tgl_dibuat;
        $data->id_supplier = $request->id_supplier;

        $data->save();

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelBarang::where('id',$id)->first(); //
        $data->delete();

        return redirect()->route('ControllerBarang.index');

    }
}
