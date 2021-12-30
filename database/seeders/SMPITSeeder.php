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
            'jenjang' => 'KBIT'
          ],
        ];

        SMPIT::insert($smpit);
    }
}
