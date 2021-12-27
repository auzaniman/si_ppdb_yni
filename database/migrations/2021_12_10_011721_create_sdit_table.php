<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id');
            $table->string('nama');
            $table->string('nama_panggilan');
            $table->string('jk');
            $table->string('nik');
            $table->string('akta');
            $table->string('tl');
            $table->string('ttl');
            $table->string('agama');
            $table->string('alamat');
            $table->string('transport');
            $table->string('j_tinggal');
            $table->string('jarak');
            $table->string('waktu');
            $table->string('penyakit');
            $table->string('hp_ortu');
            $table->string('e_mail');
            $table->string('kip');
            $table->string('anak');
            $table->string('saudara');
            $table->string('tiri');
            $table->string('angkat');
            $table->string('bahasa');
            $table->string('bb');
            $table->string('tb');
            $table->string('gd');
            $table->string('asal_sekolah');
            $table->string('alamat_asal');
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->string('ttl_ayah');
            $table->string('p_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('tk_ayah');
            $table->string('penghasilan_ayah');
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->string('ttl_ibu');
            $table->string('p_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('tk_ibu');
            $table->string('penghasilan_ibu');
            $table->string('alamat_ortu');
            $table->string('nama_wali')->nullable();
            $table->string('p_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();
            $table->string('hp_wali')->nullable();
            $table->string('alamat_wali')->nullable();
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
        Schema::dropIfExists('sdit');
    }
}
