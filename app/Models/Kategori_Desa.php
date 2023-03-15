<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Desa extends Model
{
    use HasFactory;
    protected $table = "kategori_proker_desa";
    protected $fillable =[
        'kategori',
    ];
}
