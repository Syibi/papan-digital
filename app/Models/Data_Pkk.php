<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Pkk extends Model
{
    use HasFactory;
    protected $table = "data_pkk";
    protected $fillable =[
        'pkk_dusun',
        'pkk_rw',
        'pkk_rt',
        'dasa_wisma',
        'jml_kk',
        'jml_jiwa',
        'tp_pkk',
        'umum',
        'khusus',
    ];
}
