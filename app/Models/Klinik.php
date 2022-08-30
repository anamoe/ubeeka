<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_klinik','user_id','no_izin_klinik'
    ];
}
