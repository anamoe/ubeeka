<?php

use App\Models\KategoriProduk;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_produks', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->timestamps();
        });
        KategoriProduk::create([
            'kategori'=>'obat',
        ]);
        KategoriProduk::create([
            'kategori'=>'makanan',
        ]);
     
        KategoriProduk::create([
            'kategori'=>'minuman',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_produks');
    }
}
