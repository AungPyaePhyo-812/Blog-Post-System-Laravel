<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ["Admin","Normal User"];
        $roleIndex = 1;
        foreach($roles as $role){
            DB::table('roles')->insert([
                'name'=>$role,
                'level'=>$roleIndex
            ]);
            $roleIndex++;
        }
    }
}
