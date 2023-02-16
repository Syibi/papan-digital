<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataUmumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_umum', function (Blueprint $table) {
            $table->id();
            $table->string("topologi_desa");
            $table->string("tingkat_perkembangan");
            $table->string("luas_wilayah");
            $table->string("batas_wilayah_utara");
            $table->string("batas_wilayah_selatan");
            $table->string("batas_wilayah_barat");
            $table->string("batas_wilayah_timur");
            $table->string("orbitrasi_kecamatan");
            $table->string("orbitrasi_kabupaten");
            $table->string("orbitrasi_kota");
            $table->string("orbitrasi_provinsi");
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
        //
    }
}
