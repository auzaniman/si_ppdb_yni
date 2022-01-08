<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
        SchoolSeeder::class,
        // StatusSeeder::class,
        // KBITSeeder::class,
        // TKIT1Seeder::class,
        // TKIT2Seeder::class,
        // SDITSeeder::class,
        SMPITSeeder::class,
        // SMAITSeeder::class,
      ]);
    }
}
