<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePkbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkb', function (Blueprint $table) {
            $table->id();
            $table->string('id_konsultasi');
            $table->string('tgl_konsultasi');
            $table->string('tgl_lahir');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('keluhan');
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
        Schema::dropIfExists('pkb');
    }
}
