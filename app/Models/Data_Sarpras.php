<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Sarpras extends Model
{
    use HasFactory;
    protected $table = "data_sarpras";
    protected $fillable =[
        'kantor_desa',
        'puskesmas',
        'poskesdes',
        'posyandu',
        'perpus',
        'gedung_paud',
        'gedung_tk',
        'gedung_sd',
        'gedung_smp',
        'gedung_sma',
        'masjid',
        'musholla',
        'gereja',
        'pura',
        'vihara',
        'kelenteng',
        'olahraga',
        'kesenian',
        'balai',
        'sumur_desa',
        'pasar_desa',
        'lainnya'
    ];
}
