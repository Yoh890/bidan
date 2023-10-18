<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekamedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekamedis', function (Blueprint $table) {
            $table->id();
            $table->string('id_rekamedis');
            $table->string('id_pasien');
            $table->string('riwayat_penyakit');
            $table->string('pemeriksaan_fisik');
            $table->string('diagnosa');
            $table->string('rekomendasi_pengobatan');
            $table->string('tanggal_pemeriksaan');
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
        Schema::dropIfExists('rekamedis');
    }
}
