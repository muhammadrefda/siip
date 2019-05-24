<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelBarangKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Keluar', function (Blueprint $table) {
            $table->bigIncrements('id_keluar');
            $table->dateTime('tanggal');
            $table->string('jenis_keluar');
            $table->string('admin');
            $table->integer('kuantitas');
            $table->foreign('id_barang')->references('id_barang')->on('Tb_Barang');

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
        Schema::dropIfExists('Tb_Keluar');
    }
}
