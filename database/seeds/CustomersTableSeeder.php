<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Company::all()->each(function ($company) {
            $company->subscribers()->saveMany(
                factory(App\Customer::class, 100)->make(['company_id'=>$company->id]));
        });
    }
}
