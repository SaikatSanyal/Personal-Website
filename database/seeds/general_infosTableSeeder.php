<?php

use Illuminate\Database\Seeder;

class general_infosTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('general_infos')->insert([
               'id' => '1',
               'date_of_birth' => '18 Mar,1993',
               'address' => 'Mirpur-2,Dhaka',
                'email' => 'saikat.ruet12@gmail.com',
               'phone' => '01763680759'
           ]);
}
}
