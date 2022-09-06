<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_produks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi');
            $table->string('total');
            $table->string('status_pembayaran');
            $table->string('metode_pembayaran')->nullable();
            $table->string('nama_penerima')->nullable();
            $table->string('bukti_transaksi')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('alamat')->nullable();
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
        Schema::dropIfExists('transaksi_produks');
    }
}
