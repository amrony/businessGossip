<?php

use Illuminate\Database\Seeder;

class PaymentMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PaymentMethod::all()->each->delete();

        $data = [
            ['name' => 'State Bank Of India'],
            ['name' => 'PAYTM'],
            ['name' => 'Sbi'],
            ['name' => 'Yes Bank'],
            ];
        foreach ($data as $row){
            \App\PaymentMethod::create($row);
        }
    }
}
