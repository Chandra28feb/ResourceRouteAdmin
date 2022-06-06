<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name'=> 'admin',
        'email'=>'admin@gmail.com',
        'mobile'=>'900000000',
        'user_type'=>'1',
        'password'=>Hash::make('password'),
        'status' =>'1'
        ]);
    }
}
