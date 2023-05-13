<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->mediumText("deskripsi");
            $table->string("file");
            $table->tinyInteger("tipe")->default('0')->comment('1=video, 0=gambar, 2=tab');
            $table->Integer("durasi")->default('5000');
            $table->tinyInteger("status")->default('0')->comment('1=hidden, 0=visible');
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
        Schema::dropIfExists('slides');
    }
}
