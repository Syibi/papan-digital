<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilDesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_desa', function (Blueprint $table) {
            $table->id();
            $table->string("nama_desa");
            $table->string("tahun_pembentukan");
            $table->string("dasar_hukum");
            $table->string("kode_wilayah");
            $table->string("kode_pos");
            $table->string("kecamatan");
            $table->string("kabupaten");
            $table->string("provinsi");
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
        Schema::dropIfExists('profil_desa');
    }
}
