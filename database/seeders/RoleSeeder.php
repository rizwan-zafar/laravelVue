<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('roles')->insert([
            'role_name'=>'admin', 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
       
               ]);
            DB::table('roles')->insert([
            'role_name'=>'creator', 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        
                ]);
            DB::table('roles')->insert([
            'role_name'=>'contributor', 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        
                ]);
    }
}
