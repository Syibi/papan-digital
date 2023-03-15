<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proker_Desa extends Model
{
    use HasFactory;
    protected $table = "proker_desa";
    protected $fillable =[
        'program',
        'kegiatan',
        'kategori',
        'pelaksanaan',
        'sasaran',
        'sumber_dana',
        'dokumentasi',
        'file',
    ];
}
