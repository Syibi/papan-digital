<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktur_Desa extends Model
{
    use HasFactory;
    protected $table = "struktur_desa";
    protected $fillable = [
        'nama',
        'jabatan',
        'atasan',
        'link',
        'file'
    ];
}
