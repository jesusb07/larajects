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
            'username' => 'loreangrey',
            'email' => 'jesuscraf_46@hotmail.com',
            'first_name' => 'Jesus',
            'last_name' => 'Barazarte',
            'birthdate' => '1992-05-07',
            'genre' => 'hombre',
            'country' => 'Venezuela',
            'avatar' => 'avatars/loreangrey.jpg',
            'password' => bcrypt('24983515'),
        ));
    }
}
