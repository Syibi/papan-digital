<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Pekerjaan extends Model
{
    use HasFactory;
    protected $table = "data_pekerjaan";
    protected $fillable =[
        'pns',
        'tni_polri',
        'swasta',
        'dagang',
        'petani',
        'tukang',
        'buruh',
        'pensiunan',
        'nelayan',
        'peternak',
        'jasa',
        'seni',
        'lainnya',
        'tidak_bekerja'
    ];
}
