<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Barang', function (Blueprint $table) {
            $table->bigIncrements('id_barang');
            $table->string('nama_barang');
            $table->integer('stok');
            $table->longText('deskripsi_barang');
            $table->dateTime('tgl_kadaluarsa');
            $table->dateTime('tgl_dibuat');
            $table->integer('id_supplier'); // $table->foreign('id_supplier')->references('id_supplier')->on('tb_supplier');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tb_Barang');
    }
}
