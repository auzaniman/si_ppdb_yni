<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $program = [
          [
            'pilihan_program' => 'Reguler'
          ],
          [
            'pilihan_program' => 'Tahfidz'
          ]
        ];

        Program::insert($program);
    }
}
