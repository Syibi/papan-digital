<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Umum extends Model
{
    use HasFactory;
    protected $table = "data_umum";
    protected $fillable =[
        'topologi_desa',
        'tingkat_perkembangan',
        'luas_wilayah',
        'batas_wilayah_utara',
        'batas_wilayah_selatan',
        'batas_wilayah_barat',
        'batas_wilayah_timur',
        'orbitrasi_kecamatan',
        'orbitrasi_kabupaten',
        'orbitrasi_kota',
        'orbitrasi_provinsi'
    ];
}
