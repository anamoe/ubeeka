<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananLogistiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_logistiks', function (Blueprint $table) {
            $table->id();
            $table->string('pemesan');
            $table->string('total');
            $table->string('foto_ktp');
            $table->string('paket');
            $table->string('alamat_asal');
            $table->string('alamat_tujuan');
            $table->string('tarif');
            // $table->string('muatan_ton')->nullable();
            $table->string('muat')->nullable();
            $table->string('jml_muat')->nullable();
            $table->string('total_muat')->nullable();

            $table->string('rp_tepung')->nullable();
            $table->string('jml_rp_tepung')->nullable();
            $table->string('total_rp_tepung')->nullable();

            $table->string('menir')->nullable();
            $table->string('total_menir')->nullable();
            $table->string('jml_menir')->nullable();

            $table->string('jml_rp_menir')->nullable();
            $table->string('rp_menir')->nullable();
            $table->string('total_rp_menir')->nullable();
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
        Schema::dropIfExists('pemesanan_logistiks');
    }
}
