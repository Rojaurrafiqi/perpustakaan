<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpustakaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpustakaan', function (Blueprint $table) {
            $table->id();
            $table->string('ktp_ktas');
            $table->string('nomor_ktp_ktas');
            $table->string('email');
            $table->string('namalengkap');
            $table->string('password');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('alamat_rumah');
            $table->string('hp');
            $table->string('nama_instansi');
            $table->string('telpon_instansi');
            $table->string('alamat_instansi');
            $table->string('pendidikan_terakhir');
            $table->string('kelamin');
            $table->string('pekerjaan');
            $table->string('status_perkawinan');
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
        Schema::dropIfExists('perpustakaans');
    }
}
