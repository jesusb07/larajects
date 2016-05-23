<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array(
            'nickname' => 'loreangrey',
            'email' => 'jesuscraf_46@hotmail.com',
            'password' => \Hash::make('24983515')
        ));
    }
}
