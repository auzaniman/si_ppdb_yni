<?php

namespace Database\Seeders;

use App\Models\SMAIT;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SMAITSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $smait = [
          [
            'jenjang' => 'KBIT'
          ],
        ];

        SMAIT::insert($smait);
    }
}
