<?php

namespace Database\Seeders;

 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            'name'=>'User1',
            'role_id'=>1,
            'email'=>'user1@gmail.com',
            'password'=>'user125',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
       
               ]);
            DB::table('users')->insert([
            'name'=>'User2',
            'role_id'=>2,
            'password'=>'user125',
            'email'=>'user2@gmail.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        
                ]);
            DB::table('users')->insert([
            'name'=>'User3',
            'role_id'=>3,
            'email'=>'user3@gmail.com',
            'password'=>'user125',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        
                ]);
    }
}
