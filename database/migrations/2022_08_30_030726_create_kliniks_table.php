<?php

use App\Models\Klinik;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKliniksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kliniks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_klinik');
            $table->string('no_izin_klinik');

            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->timestamps();
        });

        Klinik::create([
            'nama_klinik'=>'YING FANG',
            'no_izin_klinik'=>'1131313',
            'user_id'=>'2',

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kliniks');
    }
}
