<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RokokHerbal extends Model
{
    use HasFactory;
    protected $fillable = [
       
            'nama_produk',
            'kandungan',
            'pembelian',
            'distributor',
            'reseller',
            'agen',
            'no_hp'
        
    ];
}
