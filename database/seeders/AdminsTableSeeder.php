<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->delete();
        $adminRecords = [
            [
                'id'=>1,'name'=>'admin','type'=>'admin','mobile'=>544545,'email'=>'admin@gmal.com','password'=>'$2y$10$roafv1aqhZfRjuWGB9mpzOqaRqNWR/lCmFn/HJB9hnZCyOchdBWQ6',
                'image'=>'','status'=>1
            ],
        ];
        foreach($adminRecords as $key =>$record){
            Admin::create($record);
        }
    }
}
