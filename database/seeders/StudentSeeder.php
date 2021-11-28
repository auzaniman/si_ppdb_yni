<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = [
          [
            'school_id' => '3',
            'stay_id' => '1',
            'department_id' => '2',
            'program_id' => '1',
            'nama' => 'Auzan',
            'ttl' => 'Semarang, 12 Juni 1996',
            'alamat' => 'Jl. Perumnas',
            'asal_sekolah' => 'smpit harbun',
            'nik' => '08978675778',
            'nisn' => '9986756580',
            'nama_ayah' => 'fulan',
            'nama_ibu' => 'fulanah',
            'pekerjaan_ayah' => 'pns',
            'pekerjaan_ibu' => 'wiraswasta',
            'ukuran_baju' => 'L',
            'hp_siswa' => '0897677576',
            'hp_ortu' => '0876755765',
          ],
          [
            'school_id' => '6',
            'stay_id' => '2',
            'department_id' => '2',
            'program_id' => '1',
            'nama' => 'Nuna',
            'ttl' => 'Tenggarong, 27 Juni 1997',
            'alamat' => 'Jl. Perumnas',
            'asal_sekolah' => 'smpit nurul ilmi',
            'nik' => '08978673778',
            'nisn' => '9986754580',
            'nama_ayah' => 'fulan',
            'nama_ibu' => 'fulanah',
            'pekerjaan_ayah' => 'pns',
            'pekerjaan_ibu' => 'wiraswasta',
            'ukuran_baju' => 'S',
            'hp_siswa' => '0897637576',
            'hp_ortu' => '0876754765',
          ],
        ];

        Student::insert($student);
    }
}
