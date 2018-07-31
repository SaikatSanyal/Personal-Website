<?php

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
         // $this->call(general_infosTableSeeder::class);
          //$this->call(skillsTableSeeder::class);
          $this->call(time_linesTableSeeder::class);
    }
}
