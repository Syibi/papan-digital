<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Pendidikan extends Model
{
    use HasFactory;
    protected $table = "data_pendidikan";
    protected $fillable =[
        'tk',
        'sd',
        'smp',
        'sma',
        'diploma',
        'sarjana',
        'pascasarjana',
        'pondok',
        'keagamaan',
        'slb',
        'kursus',
        'tidak_sekolah'
    ];
}
