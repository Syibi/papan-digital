<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataPkk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pkk', function (Blueprint $table) {
            $table->id();
            $table->string("pkk_dusun");
            $table->string("pkk_rw");
            $table->string("pkk_rt");
            $table->string("dasa_wisma");
            $table->string("jml_kk");
            $table->string("jml_jiwa");
            $table->string("tp_pkk");
            $table->string("umum");
            $table->string("khusus");
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
        Schema::dropIfExists('data_pkk');
    }
}
