<?php

use Illuminate\Database\Seeder;

class MobileRechargeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Operator::all()->each->delete();

        $data = [
            ['name' => 'Aircel'],
            ['name' => 'Airtel'],
            ['name' => 'BSNL - STV'],
            ['name' => 'BSNL - TOPUP'],
            ['name' => 'GSPL'],
            ['name' => 'DOCOME - SPECIAL'],
            ['name' => 'DOCOMO'],
            ['name' => 'Idea'],
            ['name' => 'LOOP MOBILE'],
            ['name' => 'MTNL - Recharge'],
            ['name' => 'MTNL – TOPUP'],
            ['name' => 'MTS'],
            ['name' => 'RECHARGE VIDEOCON'],
            ['name' => 'RECHARGE VIDEOCON - SPL'],
            ['name' => 'RELIANCE - GSM'],
            ['name' => 'RELIANCE - JIO'],
            ['name' => 'TATA INDICOM'],
            ['name' => 'TATA WALKY'],
            ['name' => 'UNION'],
            ['name' => 'UNION - SPL'],
            ['name' => 'VIRGIN - CDMA'],
            ['name' => 'VIRGIN - GSM'],
            ['name' => 'Vodafone'],
        ];
        foreach ($data as $row){
            \App\Operator::create($row);
        }
    }
}
