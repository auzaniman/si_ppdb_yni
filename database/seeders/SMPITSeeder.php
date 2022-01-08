<?php

namespace Database\Seeders;

use App\Models\SMPIT;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SMPITSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $smpit = [
          [
            'school_id' => '5',
            'program' => 'Reguler',
            'nama' => 'Nuna',
            'ttl' => 'Tenggarong, 27 Juni 1997',
            'alamat' => 'Jl. Perumnas',
            'asal_sekolah' => 'smpit harbun',
            'nik' => '08578675779',
            'nisn' => '9486756580',
            'kk' => '4986756780',
            'nama_ayah' => 'fulan',
            'nik_ayah' => '4946758580',
            'nama_ibu' => 'fulanah',
            'nik_ibu' => '4989756080',
            'pekerjaan_ayah' => 'pns',
            'pekerjaan_ibu' => 'wiraswasta',
            'ukuran_baju' => 'L',
            'hp_siswa' => '0897677676',
            'hp_ortu' => '0876755755',
            'image' => '2.jpeg',
            'image_bukti' => '4.jpeg'
          ],
        ];

        SMPIT::insert($smpit);
    }
}
