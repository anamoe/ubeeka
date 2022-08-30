<?php

use App\Models\Logistik;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogistiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logistiks', function (Blueprint $table) {
            $table->id();
            $table->string('paket');
            $table->string('alamat');
            $table->string('tujuan_kirim');
            $table->string('biaya');
            $table->unsignedBigInteger('id_provinsi')->nullable();
            $table->unsignedBigInteger('id_kota')->nullable();
            $table->unsignedBigInteger('id_kecamatan')->nullable();
            $table->unsignedBigInteger('id_desa')->nullable();
            $table->timestamps();
        });
        Logistik::create([
            'paket'=>'paket tambang',
            'alamat' =>'banyuwangi',
            'tujuan_kirim'=>'tulungagung',
            'biaya'=>'1200000',

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logistiks');
    }
}
