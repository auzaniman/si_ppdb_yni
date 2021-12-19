<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTkit1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tkit1', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id');
            $table->string('nama');
            $table->string('nama_panggilan');
            $table->string('kelamin');
            $table->string('nik');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('trans_sekolah');
            $table->string('no_akta');
            $table->string('hp_ortu');
            $table->string('tb');
            $table->string('bb');
            $table->string('lingkar_kepala');
            $table->string('jarak_waktu');
            $table->string('jumlah_saudara');
            $table->string('nama_ayah');
            $table->string('ttl_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('pendidikan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('nama_ibu');
            $table->string('ttl_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('pendidikan_ibu');
            $table->string('penghasilan_ibu');
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
        Schema::dropIfExists('tkit1');
    }
}
