<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataPekerjaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->string("pns");
            $table->string("tni_polri");
            $table->string("swasta");
            $table->string("dagang");
            $table->string("petani");
            $table->string("tukang");
            $table->string("buruh");
            $table->string("pensiunan");
            $table->string("nelayan");
            $table->string("peternak");
            $table->string("jasa");
            $table->string("seni");
            $table->string("lainnya");
            $table->string("tidak_bekerja");
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
        Schema::dropIfExists('data_pekerjaan');
    }
}
