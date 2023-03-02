<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataPendidikan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string("tk");
            $table->string("sd");
            $table->string("smp");
            $table->string("sma");
            $table->string("diploma");
            $table->string("sarjana");
            $table->string("pascasarjana");
            $table->string("pondok");
            $table->string("keagamaan");
            $table->string("slb");
            $table->string("kursus");
            $table->string("tidak_sekolah");
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
        Schema::dropIfExists('data_pendidikan');
    }
}
