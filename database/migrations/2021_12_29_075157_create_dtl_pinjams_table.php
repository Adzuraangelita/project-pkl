<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDtlPinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtl_pinjams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_register')->unsigned();
            $table->string('kode_pinjam');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->foreign('kode_register')->references('id')->on('bukus')
            ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('dtl_pinjams');
    }
}
