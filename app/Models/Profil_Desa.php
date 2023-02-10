<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil_Desa extends Model
{
    use HasFactory;
    protected $table = "profil_desa";
    protected $fillable =[
        'nama_desa',
        'tahun_pembentukan',
        'dasar_hukum',
        'kode_wilayah',
        'kode_pos',
        'kecamatan',
        'kabupaten',
        'provinsi'
    ];
}
