<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKbitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kbit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id');
            $table->string('nama_akta');
            $table->string('nama_panggil');
            $table->string('jenis_kelamin');
            $table->string('nik_anak');
            $table->string('no_akta');
            $table->string('tt_lahir');
            $table->string('agama');
            $table->string('alamat_siswa');
            $table->string('transportasi');
            $table->string('jenis_tinggal'); //rumahsendiri/sewa
            $table->string('jarak_tinggal');
            $table->string('waktu_tempuh');
            $table->string('penyakit');
            $table->string('anak_ke');
            $table->string('jml_saudara_kandung');
            $table->string('jml_saudara_tiri');
            $table->string('jml_saudara_angkat');
            $table->string('bahasa_sehari');
            $table->string('tb');
            $table->string('bb');
            $table->string('gd');
            $table->string('hobi');
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->string('ttl_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('tempat_kerja_ayah');
            $table->string('penghasilan_ayah');
            $table->string('no_ayah');
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->string('ttl_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('tempat_kerja_ibu');
            $table->string('penghasilan_ibu');
            $table->string('no_ibu');
            $table->string('alamat_ortu');
            $table->string('nama_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();
            $table->string('no_wali')->nullable();
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
        Schema::dropIfExists('kbit');
    }
}
