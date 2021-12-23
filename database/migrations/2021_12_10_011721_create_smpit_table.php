<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmpitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smpit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id');
            $table->string('stay');
            $table->string('program');
            $table->string('nama');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('asal_sekolah');
            $table->string('nisn');
            $table->string('nik');
            $table->string('kk');
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('ukuran_baju'); //S,M,L,XL
            $table->string('hp_siswa');
            $table->string('hp_ortu');
            $table->text('image');
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
        Schema::dropIfExists('smpit');
    }
}
