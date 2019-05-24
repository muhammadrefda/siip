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
}
