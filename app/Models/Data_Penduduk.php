<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Penduduk extends Model
{
    use HasFactory;
    protected $table = "data_penduduk";
    protected $fillable =[
        'jml_kk',
        'miskin',
        'laki-laki',
        'perempuan',
        'muda',
        'dewasa',
        'tua',
    ];
}
