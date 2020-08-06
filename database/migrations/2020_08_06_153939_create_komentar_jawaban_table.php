<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi',255);
            $table->datetime('tanggal_dibuat',0);
            $table->unsignedBigInteger('profil_id'); 
            $table->unsignedBigInteger('jawaban_id'); 
            $table->foreign('profil_id')->references('id')->on('profil');                   
            $table->foreign('jawaban_id')->references('id')->on('jawaban');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar_jawaban');
    }
}
