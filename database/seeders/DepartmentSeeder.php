<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = [
          [
            'pilihan_jurusan' => 'IPA'
          ],
          [
            'pilihan_jurusan' => 'IPS'
          ]
        ];

        Department::insert($department);
    }
}
