<?php

namespace Database\Seeders;

use App\Models\TKIT2;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TKIT2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tkit2 = [
          [
            'school_id' => '3',
            'nama_akta' => 'auzan',
            'nama_panggil' => 'auzan',
            'jenis_kelamin' => 'auzan',
            'nik_anak' => 'auzan',
            'tt_lahir' => 'auzan',
            'alamat_siswa' => 'auzan',
            'agama' => 'auzan',
            'transportasi' => 'auzan',
            'jenis_tinggal' => 'auzan',
            'jarak_tinggal' => 'auzan',
            'waktu_tempuh' => 'auzan',
            'penyakit' => 'auzan',
            'anak_ke' => 'auzan',
            'jml_saudara_kandung' => 'auzan',
            'jml_saudara_tiri' => 'auzan',
            'jml_saudara_angkat' => 'auzan',
            'bahasa_sehari' => 'auzan',
            'tb' => 'auzan',
            'bb' => 'auzan',
            'gd' => 'auzan',
            'hobi' => 'auzan',
            'cita_cita' => 'auzan',
            'sekolah_asal' => 'auzan',
            'alamat_sekolah_asal' => 'auzan',
            'no_kk' => 'auzan',
            'nama_ayah' => 'auzan',
            'nik_ayah' => 'auzan',
            'ttl_ayah' => 'auzan',
            'pendidikan_ayah' => 'auzan',
            'pekerjaan_ayah' => 'auzan',
            'tempat_kerja_ayah' => 'auzan',
            'penghasilan_ayah' => 'auzan',
            'no_ayah' => 'auzan',
            'alamat_ayah' => 'auzan',
            'nama_ibu' => 'auzan',
            'nik_ibu' => 'auzan',
            'ttl_ibu' => 'auzan',
            'pendidikan_ibu' => 'auzan',
            'pekerjaan_ibu' => 'auzan',
            'tempat_kerja_ibu' => 'auzan',
            'penghasilan_ibu' => 'auzan',
            'no_ibu' => 'auzan',
            'alamat_ibu' => 'auzan',
            'tinggal_bersama_wali' => 'auzan',
            'nama_wali' => 'auzan',
            'pendidikan_wali' => 'auzan',
            'pekerjaan_wali' => 'auzan',
            'penghasilan_ayah' => 'auzan',
            'no_wali' => 'auzan',
            'alamat_wali' => 'auzan',
          ],
        ];

        TKIT2::insert($tkit2);
    }
}
