<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Papan_Data extends Model
{
    use HasFactory;
    protected $table = "papan_data";
    protected $fillable =[
        'nama_papan',
        'kategori',
        'file',
    ];
}
