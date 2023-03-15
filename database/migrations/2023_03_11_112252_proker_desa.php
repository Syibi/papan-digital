<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProkerDesa extends Migration
{

    public function up()
    {
        Schema::create('proker_desa', function (Blueprint $table) {
            $table->id();
            $table->string("program");
            $table->string("kegiatan");
            $table->string("kategori");
            $table->string("pelaksanaan");
            $table->string("sasaran");
            $table->string("sumber_dana");
            $table->tinyInteger("dokumentasi")->default('0')->comment('1=dokumentasi, 0=non-dokumentasi');
            $table->string("file");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proker_desa');
    }
}
