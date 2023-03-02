<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataPenduduk extends Migration
{

    public function up()
    {
        Schema::create('data_penduduk', function (Blueprint $table) {
            $table->id();
            $table->string("jml_kk");
            $table->string("laki-laki");
            $table->string("perempuan");
            $table->string("muda");
            $table->string("dewasa");
            $table->string("tua");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_penduduk');
    }
}
