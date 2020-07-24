<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lelang', function (Blueprint $table) {
            $table->id();
            $table->string('kode_lelang')->unique();
            $table->string('nama');
            $table->text('link');
            $table->string('reward');
            $table->string('file_penawaran');
            $table->string('file_teknis');
            $table->string('file_kualifikasi');
            $table->timestamps();
        });

        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lelang_id')->unsigned();
            $table->text('keterangan');
            $table->date('jadwal');
            $table->date('batas');
            $table->timestamps();
            $table->foreign('lelang_id')->references('id')->on('lelang');
        });

        Schema::create('tahapan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lelang_id')->unsigned();
            $table->date('tanggal_upload');
            $table->text('pekerjaan');
            $table->timestamps();
            $table->foreign('lelang_id')->references('id')->on('lelang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lelang');
        Schema::dropIfExists('jadwal');
        Schema::dropIfExists('tahapan');
    }
}
