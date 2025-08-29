<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('comments')->truncate();
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('users') -> insert([
            'emp_id' => '1001',
            'password' => Hash::make('pass1001'),
            'emp_name' => '田中　太郎',
            'dep_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users') -> insert([
            'emp_id' => '1002',
            'password' => Hash::make('pass1002'),
            'emp_name' => '小林　翔太',
            'dep_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users') -> insert([
            'emp_id' => '2001',
            'password' => Hash::make('pass2001'),
            'emp_name' => '高橋　美咲',
            'dep_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
