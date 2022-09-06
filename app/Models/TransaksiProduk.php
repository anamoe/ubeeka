<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiProduk extends Model
{
    use HasFactory;
    protected $fillable =[
        'kode_transaksi','total','status_pembayaran','metode_pembayaran',
    ];
}
