<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Penilaian extends Migration
{
    public function up()
    {   
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_kegiatan', 1024);
            $table->string('deskripsi_kegiatan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->smallInteger('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kegiatan');
    }
}
