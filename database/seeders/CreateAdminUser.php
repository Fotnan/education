<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'firstname'=>'manager',
            'lastname'=>'manager',
            'phone'=>'111111111111',
            'email'=>'manager@caesar.com',
            'password'=>bcrypt('manager'),
            'status'=>'1',
        ]);
    }
}
