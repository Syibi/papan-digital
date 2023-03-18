<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProkerPkk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proker_pkk', function (Blueprint $table) {
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proker_pkk');
    }
}
