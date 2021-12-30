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
            'jenjang' => 'KBIT'
          ],
        ];

        TKIT1::insert($tkit1);
    }
}
