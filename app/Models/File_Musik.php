<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File_Musik extends Model
{
    use HasFactory;
    protected $table = "file_musik";
    protected $fillable =[
        'file',
    ];
}
