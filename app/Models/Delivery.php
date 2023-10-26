<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'nama',
        'asal_perusahaan',
        'plat_kendaraan',
        'lokasi_tujuan',
        'keperluan'   
    ];
}
