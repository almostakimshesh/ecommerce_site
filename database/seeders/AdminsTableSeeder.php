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
                'id'=>1,'name'=>'admin','type'=>'admin','mobile'=>544545,'email'=>'admin@gmail.com','password'=>'$2y$10$NTeAzM7eixUhDnmGcqMxaevHtrLR7V28XPN9GBp8eIJ1kZtAWs7JG',
                'image'=>'','status'=>1
            ],
        ];
        foreach($adminRecords as $key =>$record){
            Admin::create($record);
        }
    }
}
