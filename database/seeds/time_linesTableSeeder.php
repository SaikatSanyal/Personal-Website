<?php

use Illuminate\Database\Seeder;

class time_linesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('time_lines')->insert([
                'id' => '1',
                'year' => '2017',
                'info' => 'This is test',
            ]);
     }
 }
