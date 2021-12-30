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
            'jenjang' => 'KBIT'
          ],
        ];

        TKIT2::insert($tkit2);
    }
}
