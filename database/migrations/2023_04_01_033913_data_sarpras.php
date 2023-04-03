<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataSarpras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sarpras', function (Blueprint $table) {
            $table->id();
            $table->string("kantor_desa");
            $table->string("puskesmas");
            $table->string("poskesdes");
            $table->string("posyandu");
            $table->string("perpus");
            $table->string("gedung_paud");
            $table->string("gedung_tk");
            $table->string("gedung_sd");
            $table->string("gedung_smp");
            $table->string("gedung_sma");
            $table->string("masjid");
            $table->string("musholla");
            $table->string("gereja");
            $table->string("pura");
            $table->string("vihara");
            $table->string("kelenteng");
            $table->string("olahraga");
            $table->string("kesenian");
            $table->string("balai");
            $table->string("sumur_desa");
            $table->string("pasar_desa");
            $table->string("lainnya");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_sarpras');
    }
}
