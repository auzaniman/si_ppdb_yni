<?php

namespace Database\Seeders;

use App\Models\Stay;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $stay = [
          [
            'pilihan_tinggal' => 'Reguler'
          ],
          [
            'pilihan_tinggal' => 'Asrama'
          ],
        ];

        Stay::insert($stay);
    }
}
