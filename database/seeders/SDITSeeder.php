<?php

namespace Database\Seeders;

use App\Models\SDIT;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SDITSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sdit = [
          [
            'school_id' => '4',
            'nama' => 'auzan',
            'nama_panggilan' => 'auzan',
            'jk' => 'auzan',
            'nik' => 'auzan',
            'akta' => 'auzan',
            'tl' => 'auzan',
            'ttl' => 'auzan',
            'agama' => 'auzan',
            'alamat' => 'auzan',
            'transport' => 'auzan',
            'j_tinggal' => 'auzan',
            'jarak' => 'auzan',
            'waktu' => 'auzan',
            'penyakit' => 'auzan',
            'hp_ortu' => 'auzan',
            'e_mail' => 'auzan',
            'kip' => 'auzan',
            'anak' => 'auzan',
            'saudara' => 'auzan',
            'tiri' => 'auzan',
            'angkat' => 'auzan',
            'bahasa' => 'auzan',
            'bb' => 'auzan',
            'tb' => 'auzan',
            'gd' => 'auzan',
            'asal_sekolah' => 'auzan',
            'alamat_asal' => 'auzan',
            'nama_ayah' => 'auzan',
            'nik_ayah' => 'auzan',
            'ttl_ayah' => 'auzan',
            'p_ayah' => 'auzan',
            'pekerjaan_ayah' => 'auzan',
            'tk_ayah' => 'auzan',
            'penghasilan_ayah' => 'auzan',
            'nama_ibu' => 'auzan',
            'nik_ibu' => 'auzan',
            'ttl_ibu' => 'auzan',
            'p_ibu' => 'auzan',
            'pekerjaan_ibu' => 'auzan',
            'tk_ibu' => 'auzan',
            'penghasilan_ibu' => 'auzan',
            'alamat_ortu' => 'auzan',
            'nama_wali' => 'auzan',
            'p_wali' => 'auzan',
            'pekerjaan_wali' => 'auzan',
            'penghasilan_wali' => 'auzan',
            'hp_wali' => 'auzan',
            'alamat_wali' => 'auzan',
          ],
        ];

        SDIT::insert($sdit);
    }
}
