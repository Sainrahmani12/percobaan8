<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->foreignId('datamobil_id')->nullable();
            $table->foreignId('supir_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('jaminan');
            $table->string('peminjaman');
            $table->string('pengembalian');
            $table->integer('jumlah_hari');
            $table->string('foto_peminjam');
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
        Schema::dropIfExists('identitas');
    }
}
