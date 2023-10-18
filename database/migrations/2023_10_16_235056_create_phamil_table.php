<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhamilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phamil', function (Blueprint $table) {
            $table->id();
            $table->string('id_pasienhamil');
            $table->string('id_pasien');
            $table->string('id_biodata');
            $table->string('id_riwayat');
            $table->string('id_rekamediskehamilan');
            $table->string('no');
            $table->string('subjective');
            $table->string('objective');
            $table->string('analisa');
            $table->string('penatalaksana');
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
        Schema::dropIfExists('phamil');
    }
}
