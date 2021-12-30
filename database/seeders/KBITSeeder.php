<?php

namespace Database\Seeders;

use App\Models\KBIT;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KBITSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $kbit = [
          [
            'jenjang' => 'KBIT'
          ],
        ];

        KBIT::insert($kbit);
    }
}
