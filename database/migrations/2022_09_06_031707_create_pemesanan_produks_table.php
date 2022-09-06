<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_produks', function (Blueprint $table) {
            $table->id();
          
            $table->unsignedBigInteger('produk_id')->nullable();
            $table->foreign('produk_id')
            ->references('id')
            ->on('produks')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->unsignedBigInteger('transaksi_id')->nullable();
            $table->foreign('transaksi_id')
            ->references('id')
            ->on('transaksi_produks')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('nama_produk');
            $table->string('harga');
            $table->string('jumlah');
            
         
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
        Schema::dropIfExists('pemesanan_produks');
    }
}
