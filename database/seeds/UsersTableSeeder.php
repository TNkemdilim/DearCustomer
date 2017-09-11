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
            'id' => 1,
            'firstname' => 'Tochukwu',
            'lastname' => 'Nkemdilim',
            'picture_path' => str_random(10),
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
        ]); 
    }
}