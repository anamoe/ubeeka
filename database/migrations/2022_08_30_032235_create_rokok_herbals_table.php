<?php

use App\Models\RokokHerbal;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRokokHerbalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rokok_herbals', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('kandungan');
            $table->string('pembelian');
            $table->string('distributor');
            $table->string('reseller');
            $table->string('agen');
            $table->string('no_hp');
            $table->timestamps();
        });

        RokokHerbal::create([
            'nama_produk'=>'gudang garam',
            'kandungan'=>'20gram',
            'pembelian'=>'pack',
            'distributor'=>'Distrik',
            'reseller'=>'johanresel',
            'agen'=>'agen',
            'no_hp'=>'082'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rokok_herbals');
    }
}
