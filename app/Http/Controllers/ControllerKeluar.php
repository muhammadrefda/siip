<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\ModelBarangKeluar;
class ControllerKeluar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelBarangKeluar::all(); //
        return view('barang',compact('data')); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(''); // nanti di sesuaiin lagi yg ini
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelBarangKeluar();  //
        $data->tanggal = $request->tanggal;
        $data->jenis_keluar = $request->kenis_keluar;
        $data->admin = $request->admin;
        $data->kuantitas =$request->kuantitas;
        $data->id_barang =$request->id_barang;
        $data->save();

        return redirect()->route('');//menesuaikan 
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
        $data = ModelBarangKeluar::where('id',$id)->get();    //
        return view('Edit_BarangKeluar',compact('data'));
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
        $data = ModelBarangKeluar::where('id',$id)->first();  //
        $data->tanggal = $request->tanggal;
        $data->jenis_keluar = $request->kenis_keluar;
        $data->admin = $request->admin;
        $data->kuantitas =$request->kuantitas;
        $data->id_barang =$request->id_barang;

        $data->save();

        return redirect()->route(''); //menyesuakian
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data = ModelBarangKeluar::where('id',$id)->first(); //
        $data->delete();

        return redirect()->route(''); // Menyesuaikan nanti

    }
}
