<?php

namespace Database\Seeders;

use App\Models\KBIT;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KBITSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $kbit = [
          [
             'school_id' => '1',
             'nama_akta' => 'auzan',
             'nama_panggil' => 'auzan',
             'jenis_kelamin' => 'auzan',
             'nik_anak' => 'auzan',
             'no_akta' => 'auzan',
             'tt_lahir' => 'auzan',
             'agama' => 'auzan',
             'alamat_siswa' => 'auzan',
             'transportasi' => 'auzan',
             'jenis_tinggal' => 'Sewa',
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
             'nama_ayah' => 'auzan',
             'nik_ayah' => 'auzan',
             'ttl_ayah' => 'auzan',
             'pendidikan_ayah' => 'auzan',
             'pekerjaan_ayah' => 'auzan',
             'tempat_kerja_ayah' => 'auzan',
             'penghasilan_ayah' => 'auzan',
             'no_ayah' => 'auzan',
             'nama_ibu' => 'auzan',
             'nik_ibu' => 'auzan',
             'ttl_ibu' => 'auzan',
             'pendidikan_ibu' => 'auzan',
             'pekerjaan_ibu' => 'auzan',
             'tempat_kerja_ibu' => 'auzan',
             'penghasilan_ibu' => 'auzan',
             'no_ibu' => 'auzan',
             'alamat_ortu' => 'auzan',
             'nama_wali' => 'auzan',
             'pendidikan_wali' => 'auzan',
             'pekerjaan_wali' => 'auzan',
             'penghasilan_wali' => 'auzan',
             'no_wali' => 'auzan',
             'alamat_wali' => 'auzan',
           ],
        ];

        KBIT::insert($kbit);
    }
}
