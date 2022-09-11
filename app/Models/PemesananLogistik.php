<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananLogistik extends Model
{
    use HasFactory;

    protected $fillable = [
        'pemesan',
        'foto_ktp',
        'paket',
        'alamat_asal',
        'alamat_tujuan',
        'tarif',
        'total',
   
        'muat',
        'jml_muat',
        'total_muat',

        'rp_tepung',
        'jml_rp_tepung',
        'total_rp_tepung',

        'menir',
        'total_menir',

        'jml_rp_menir',
        'rp_menir',
        'total_rp_menir',
        'jml_menir',
    ];
}
