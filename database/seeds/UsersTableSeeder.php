<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => str_random(10),
            'lastname' => str_random(10),
            'picture_path' => str_random(10),
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
