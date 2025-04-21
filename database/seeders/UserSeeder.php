<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin123',
            'email' => 'admin123@gmail.com',
            'tipo' => 'admin',
            'password' => Hash::make('Admin12345678'),
        ]);

        User::create([
            'name' => 'User123',
            'email' => 'user123@gmail.com',
            'tipo' => 'usuario',
            'password' => Hash::make('User12345678'),
        ]);
    }
}
