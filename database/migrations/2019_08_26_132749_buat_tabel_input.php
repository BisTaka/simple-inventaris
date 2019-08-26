<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelInput extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inven_masuk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->integer('harga');
            $table->integer('jumlah_masuk');
            $table->string('satuan');
            $table->string('keterangan_masuk');
            $table->timestamps();
        });

        Schema::create('inven_keluar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->integer('harga');
            $table->integer('jumlah_keluar');
            $table->string('satuan');
            $table->string('keterangan_keluar');
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
        Schema::dropIfExists('inven_masuk');
        Schema::dropIfExists('inven_keluar');
    }
}
