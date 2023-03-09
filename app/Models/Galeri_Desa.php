<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri_Desa extends Model
{
    use HasFactory;
    protected $table = "galeri_desa";
    protected $fillable =[
        'caption',
        'file',
        'tipe'
    ];
}
