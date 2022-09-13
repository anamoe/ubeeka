<?php

use App\Models\Slideshow;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlideshowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slideshows', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('keterangan')->nullable();
            $table->string('keterangan2')->nullable();
        
            $table->timestamps();
        });

        Slideshow::create([
            'gambar'=>'ss1.jpeg',
            'keterangan'=>'Logistik'
        ]);
        Slideshow::create([
            'gambar'=>'ss2.jpeg',
            'keterangan'=>'Logistik'
        ]);
        Slideshow::create([
            'gambar'=>'ss3.jpeg',
            'keterangan'=>'Logistik'
        ]);
        Slideshow::create([
            'gambar'=>'ss4.jpeg',
            'keterangan'=>'Logistik'
        ]);
        Slideshow::create([
            'gambar'=>'ss5.jpeg',
            'keterangan'=>'Logistik'
        ]);
        Slideshow::create([
            'gambar'=>'ss6.jpeg',
            'keterangan'=>'Logistik'
        ]);
        Slideshow::create([
            'gambar'=>'ss7.jpeg',
            'keterangan'=>'Logistik'
        ]);
        Slideshow::create([
            'gambar'=>'ss8.jpeg',
            'keterangan'=>'Logistik'
        ]);
        Slideshow::create([
            'gambar'=>'ss9.jpeg',
            'keterangan'=>'Logistik'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slideshows');
    }
}
