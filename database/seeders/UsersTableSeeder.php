<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $roles = DB::table('roles')->pluck('id', 'name'); // [ 'super_admin' => 1, ... ]

        DB::table('users')->insert([
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role_id' => $roles['super_admin'],
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role_id' => $roles['admin'],
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Student One',
                'email' => 'student1@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role_id' => $roles['student'],
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Student Two',
                'email' => 'student2@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role_id' => $roles['student'],
                'remember_token' => Str::random(10),
            ],
        ]);
    }
}
