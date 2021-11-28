<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $school = [
          [
            'jenjang' => 'PAUD'
          ],
          [
            'jenjang' => 'TKIT1'
          ],
          [
            'jenjang' => 'TKIT2'
          ],
          [
            'jenjang' => 'SDIT'
          ],
          [
            'jenjang' => 'SMPIT'
          ],
          [
            'jenjang' => 'SMAIT'
          ],
        ];

        School::insert($school);
    }
}
