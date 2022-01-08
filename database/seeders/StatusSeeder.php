<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $state = [
          [
            'state' => 'DITERIMA'
          ],
          [
            'state' => 'TIDAK DITERIMA'
          ]
        ];

        Status::insert($state);
    }
}
