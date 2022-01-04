<?php

namespace Database\Seeders;

use App\Models\TKIT1;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TKIT1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tkit1 = [
          [
             'school_id' => 'auzan',
             'nama' => 'auzan',
             'nama_panggilan' => 'auzan',
             'kelamin' => 'auzan',
             'nik' => 'auzan',
             'ttl' => 'auzan',
             'alamat' => 'auzan',
             'trans_sekolah' => 'auzan',
             'no_akta' => 'auzan',
             'hp_ortu' => 'auzan',
             'tb' => 'auzan',
             'bb' => 'auzan',
             'lingkar_kepala' => 'auzan',
             'jarak_waktu' => 'auzan',
             'jumlah_saudara' => 'auzan',
             'nama_ayah' => 'auzan',
             'ttl_ayah' => 'auzan',
             'pekerjaan_ayah' => 'auzan',
             'pendidikan_ayah' => 'auzan',
             'penghasilan_ayah' => 'auzan',
             'nama_ibu' => 'auzan',
             'ttl_ibu' => 'auzan',
             'pekerjaan_ibu' => 'auzan',
             'pendidikan_ibu' => 'auzan',
             'penghasilan_ibu' => 'auzan',
           ],
        ];

        TKIT1::insert($tkit1);
    }
}
