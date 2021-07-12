<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_wisatas', function (Blueprint $table) {
            $table->increments('idTW');
            $table->string('nama');
            $table->text('deskripsi');
            $table->text('trait');
            $table->text('funFact');
            $table->text('officialAcc');
            $table->text('akomodasi');
            $table->string('gambar');
            $table->string('gambar2');
            $table->string('gambar3');
            $table->string('provinsi');
            $table->string('tipeWisata');
            $table->string('tipeAktivitas');
            $table->string('partnerWisata');
            //$table->softDeletes();
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
        Schema::dropIfExists('tempat_wisatas');
    }
}
