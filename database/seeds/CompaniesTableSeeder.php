<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::all()->each(function ($user) {
            $user->companies()->saveMany(
                factory(App\Company::class, 10)->make(['user_id'=>$user->id]));
        });
    }
}
