<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekamkehamilanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekamkehamilan', function (Blueprint $table) {
            $table->id();
            $table->string('id_rekamediskehamilan');
            $table->string('id_pasien');
            $table->string('id_pasienhamil');
            $table->string('id_biodata');
            $table->string('id_riwayat');
            $table->string('diagnosa');
            $table->string('tgl_pemeriksaan');
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
        Schema::dropIfExists('rekamkehamilan');
    }
}
