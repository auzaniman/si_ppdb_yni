<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id');
            $table->foreignId('stay_id')->nullable();
            $table->foreignId('department_id')->nullable();
            $table->foreignId('program_id')->nullable();
            $table->string('nama');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('asal_sekolah');
            $table->string('nisn')->unique();
            $table->string('nik')->unique();
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('ukuran_baju'); //S,M,L,XL
            $table->string('hp_siswa')->unique();
            $table->string('hp_ortu')->unique();
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
        Schema::dropIfExists('students');
    }
}
