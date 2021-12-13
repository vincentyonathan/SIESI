<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pencapaian extends Migration
{
    public function up()
    {   
        Schema::create('penilaian', function (Blueprint $table) {
            $table->id('id');
            $table->integer('id_user');
            $table->integer('id_pencapaian');
            $table->float('nilai');
            $table->string('komentar');
        });
    }

    public function down()
    {
        Schema::dropIfExists('penilaian');
    }
}
