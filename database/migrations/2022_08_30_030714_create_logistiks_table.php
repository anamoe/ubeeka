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
            $table->string('alamat_asal');
            $table->string('alamat_tujuan');
            $table->string('tarif');
            // $table->string('muatan_ton')->nullable();
            $table->string('muatan_kg')->nullable();
            $table->string('tepung_kg_rp')->nullable();
            $table->string('menir_sak_rp')->nullable();
            $table->string('menir')->nullable();
            // $table->unsignedBigInteger('id_provinsi')->nullable();
            // $table->unsignedBigInteger('id_kota')->nullable();
            // $table->unsignedBigInteger('id_kecamatan')->nullable();
            // $table->unsignedBigInteger('id_desa')->nullable();
            $table->timestamps();
        });
        Logistik::create([
            'paket'=>'Trucking Franco',
            'alamat_asal' =>'Jimbe',
            'alamat_tujuan'=>'Banjanegara',
            'tarif'=>'3125000',
            // 'muatan_ton'=>'1',
            'muatan_kg'=>'8000',
            'tepung_kg_rp'=>'390.625',
            'menir_sak_rp'=>'7813',
            'menir'=>'400'

        ]);
        Logistik::create([
            'paket'=>'Trucking Franco',
            'alamat_asal' =>'Jimbe',
            'alamat_tujuan'=>'Bangkalan',
            'tarif'=>'1875000',
            // 'muatan_ton'=>'1',
            'muatan_kg'=>'8000',
            'tepung_kg_rp'=>'234.375',
            'menir_sak_rp'=>'4688',
            'menir'=>'400'

        ]);

        Logistik::create([
            'paket'=>'Trucking Franco',
            'alamat_asal' =>'Jimbe',
            'alamat_tujuan'=>'Banyuwangi',
            'tarif'=>'2250000',
            // 'muatan_ton'=>'1',
            'muatan_kg'=>'8000',
            'tepung_kg_rp'=>'281.25',
            'menir_sak_rp'=>'5625',
            'menir'=>'400'

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
