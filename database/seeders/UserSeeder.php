<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Kepala User',
            'email' => 'kepala@kepala.com',
            'password' => Hash::make('password'),
            'role' => 'Kepala',
        ]);

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'Admin',
        ]);

        User::create([
            'name' => 'Super Admin User',
            'email' => 'sadmin@sadmin.com',
            'password' => Hash::make('password'),
            'role' => 'Super Admin',
        ]);
    }
}
