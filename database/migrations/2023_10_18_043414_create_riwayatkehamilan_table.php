<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatkehamilanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayatkehamilan', function (Blueprint $table) {
            $table->id();
            $table->string('id_riwayat');
            $table->string('id_pasien');
            $table->string('id_pasienhamil');
            $table->string('biodata');
            $table->string('anak_ke');
            $table->string('apiah');
            $table->string('umur_anak');
            $table->string('pl');
            $table->string('bbl');
            $table->string('cara_persalinan');
            $table->string('penolong');
            $table->string('tempat_persalinan');
            $table->string('keterangan');
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
        Schema::dropIfExists('riwayatkehamilan');
    }
}
