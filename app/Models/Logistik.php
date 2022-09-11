<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logistik extends Model
{
    use HasFactory;
    protected $fillable = [
        'paket',
        'dari',
        'ke',
        'tarif',
        // 'muatan_ton'=>'1',
        'muatan_kg',
        'tepung_kg_rp',
        'menir_sak_rp',
        'menir'

    ];
}
