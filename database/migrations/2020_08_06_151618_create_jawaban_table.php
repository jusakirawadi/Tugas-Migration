<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi',255);
            $table->datetime('tanggal_dibuat',0);
            $table->datetime('tanggal_diperbaharui',0);   
            $table->unsignedBigInteger('profil_id'); 
            $table->unsignedBigInteger('pertanyaan_id'); 
            $table->foreign('profil_id')->references('id')->on('profil');                   
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');                   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
