<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\ModelBarangKeluarDetail;
class ControllerKeluarDetail extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelBarangKeluarDetail::all(); //
        return view('keluar_detail',compact('data'));//tinggal ganti return view nya
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
        $data = new ModelBarangKeluarDetail();  //
        $data->id_barang = $request->id_barang;
        $data->kuantitas = $request->kuantitas;
        

        $data->save();

        return redirect()->route('');//menyesuaikan
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
        $data = ModelBarangKeluarDetail::where('id',$id)->get();    //
        return view('Edit_BarangKD',compact('data'));
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
        $data = ModelBarangKeluarDetail::where('id',$id)->first();  //
        $data->id_barang = $request->id_barang;
        $data->kuantitas = $request->kuantitas;

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
        $data = ModelBarangKeluarDetail::where('id',$id)->first(); //
        $data->delete();

        return redirect()->route(''); //menyesuaikan nanti

    }
}
