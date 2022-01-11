<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatamobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datamobils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->string('nopol_mobil');
            $table->string('warna_mobil');
            $table->string('hargasewa_mobil');
            $table->string('gambar_mobil');
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
        Schema::dropIfExists('datamobils');
    }
}
