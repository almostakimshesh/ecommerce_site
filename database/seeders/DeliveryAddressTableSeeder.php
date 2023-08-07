<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DeliveryAddress;

class DeliveryAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deliverRecords = [
            ['id'=>1,'user_id'=>1,'address'=>'Fultola','city'=>'Bogura','district'=>'Bogura','division'=>'Rajshahi','Country'=>'Bangladesh','pincode'=>'5800','mobile'=>'01784851456','status'=>1]
        ];
        DeliveryAddress::insert($deliverRecords);
    }
}
