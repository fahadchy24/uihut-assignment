<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create default users
        User::create([
            'name' => 'Test User',
            'email' => 'user@user.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Test User 2',
            'email' => 'user2@user.com',
            'password' => Hash::make('password')
        ]);
    }
}
