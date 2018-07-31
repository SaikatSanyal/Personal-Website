<?php

use Illuminate\Database\Seeder;

class skillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
               'id' => '1',
               'skill_name' => 'php',
           ]);
    }
}
