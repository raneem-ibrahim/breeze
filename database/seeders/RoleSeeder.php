<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'super_admin'],
            ['name' => 'admin'],
            ['name' => 'student'],
            ['name' => 'guest'],
        ]);
    }
}