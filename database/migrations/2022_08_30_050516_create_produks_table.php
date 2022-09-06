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
            $table->longText('kandungan')->nullable();
            $table->string('rekomendasi')->nullable();
            $table->string('stok');
            $table->string('harga');
            $table->string('foto_produk');
            $table->string('foto_produk2')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->string('status')->nullable();
            $table->string('diskon')->nullable();
         
            $table->unsignedBigInteger('kategori_id')->nullable();

            $table->foreign('kategori_id')
            ->references('id')
            ->on('kategori_produks')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });

        Produk::create([
            'nama_produk'=>'kerupuk',
            'kandungan'=>'mangrove rempah',
            'rekomendasi'=>'-',
            'stok'=>'20',
            'status'=>'tampilkan',
            'harga'=>'15000',
            'foto_produk'=>'products_2.png',
            'foto_produk2'=>'products_1.png',
            'kategori_id'=>'2',
            'deskripsi'=>'Kerupuk atau krupuk adalah makanan ringan yang pada umumnya dibuat dari adonan tepung tapioka dicampur bahan perasa seperti udang atau ikan yang berasal dari Indonesia. Kerupuk dibuat dengan mengukus adonan sampai matang, kemudian dipotong tipis-tipis, dikeringkan di bawah sinar matahari sampai kering dan digoreng dengan minyak goreng yang banyak. Makanan ini populer di kalangan masyarakat Indonesia sebagai lauk hidangan serta sebagai jenis lomba makan utama pada peringatan Hari Kemerdekaan Indonesia.

            Kerupuk tidak selalu berbahan dasar tepung tapioka, tetapi lebih kepada 3 proses persiapan. Pembuatan, pengeringan, dan pemasakan (bisa digoreng dengan minyak atau pasir, atau dibakar).'
        ]);

        Produk::create([
            'nama_produk'=>'obat maag',
            'kandungan'=>'glukosa',
            'rekomendasi'=>'-',
            'stok'=>'10',
            'harga'=>'10000',
            'status'=>'tampilkan',
            'foto_produk'=>'organic-product.png',
            'foto_produk2'=>'products_1.png',
            'kategori_id'=>'1',
            'deskripsi'=>' Saat asam lambung kambuh, yang kamu inginkan pasti hanya satu. Menemukan obat maag paling ampuh untuk menghilangkan berbagai gejala menyakitkan yang muncul. Wajar saja, sakit maag memang menyebabkan rasa tidak nyaman di perut bagian atas, sensasi heartburn (rasa terbakar di dada), perut kembung, dan mual.
            
            Banyaknya obat maag yang tersedia di pasaran mungkin membuat kamu bingung harus memilih yang mana. Agar tak bingung lagi, ketahui kandungan dalam obat maag yang ampuh. 
            
            Mengetahui kandungan obat sakit maag paling ampuh
            Kamu pasti pernah mendengar bahwa obat golongan antasida adalah yang paling sering diresepkan dokter untuk mengobati maag. Antasida bekerja cepat untuk menetralkan asam lambung, sehingga  gejala maag bisa cepat sembuh. 
            
            Namun, obat maag yang paling ampuh biasanya mengandung kombinasi tiga zat obat yang bekerja sama menetralkan asam lambung serta menghilangkan gas berlebih. Tiga zat obat tersebut adalah:'
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
