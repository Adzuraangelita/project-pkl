<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->bigInteger('id_buku')->unsigned();
            $table->bigInteger('id_anggota')->unsigned();
            $table->bigInteger('id_petugas')->unsigned();
            $table->foreign('id_buku')->references('id')
            ->on('bukus')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_anggota')->references('id')
            ->on('anggotas')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_petugas')->references('id')
            ->on('petugas')->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('peminjaman');
    }
}
