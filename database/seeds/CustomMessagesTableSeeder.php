<?php

use Illuminate\Database\Seeder;

class CustomMessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::all()->each(function ($user) {
            $user->custom_messages()->saveMany(
                factory(App\CustomMessage::class, 20)->make(['user_id'=>$user->id]));
        });
    }
}
