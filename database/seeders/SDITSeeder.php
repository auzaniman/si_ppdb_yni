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
            'jenjang' => 'KBIT'
          ],
        ];

        SDIT::insert($sdit);
    }
}
