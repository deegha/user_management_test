<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('departments')->insert([
            ['department_name' => 'Engineering'],
            ['department_name' => 'Human Resource'],
            ['department_name' => 'Finance'],
            ['department_name' => 'Admin']  
        ]);

        DB::table('users')->insert([
            'firstname' =>'Deegha',
            'lastname' => 'Galkissa',
            'departmrnt_id' => 1,
        ]);
       
    }
}
