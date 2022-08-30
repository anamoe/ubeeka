<?php

use App\Models\Produk;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('kandungan')->nullable();
            $table->string('rekomendasi')->nullable();
            $table->string('stok');
            $table->string('harga');
            $table->string('foto_produk');
            $table->string('foto_produk2')->nullable();
            $table->unsignedBigInteger('kategori_id')->nullable();

            $table->foreign('kategori_id')
            ->references('id')
            ->on('kategori_produks')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->timestamps();
        });

        Produk::create([
            'nama_produk'=>'kerupuk',
            'kandungan'=>'-',
            'rekomendasi'=>'-',
            'stok'=>'20',
            'harga'=>'15000',
            'foto_produk'=>'-',
            'foto_produk2'=>'-',
            'kategori'=>'2'
        ]);

        Produk::create([
            'nama_produk'=>'obat maag',
            'kandungan'=>'-',
            'rekomendasi'=>'-',
            'stok'=>'10',
            'harga'=>'10000',
            'foto_produk'=>'-',
            'foto_produk2'=>'-',
            'kategori'=>'1'
        ]);

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
