<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelBarangKeluarDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_KeluarDetail', function (Blueprint $table) {
            $table->bigIncrements('id_kdetail');
            $table->foreign('id_barang')->references('id_barang')->on('Tb_Barang');
            $table->integer('kuantitas');
            $table->timestamps();
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tb_KeluarDetail');
    }
}
