<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kegiatan extends Migration
{
    public function up()
    {   
        Schema::create('pencapaian', function (Blueprint $table) {
            $table->id('id');
            $table->integer('id_kegiatan');
            $table->string('nama_pokok',1024);
            $table->string('deskripsi',1024);
            $table->float('bobot');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pencapaian');
    }
}
