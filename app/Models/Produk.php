<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_produk',
        'kandungan',
        'rekomendasi',
        'stok',
        'harga',
        'foto_produk',
        'foto_produk2',
        'kategori_id','diskon','status','deskripsi'
    ];
}
