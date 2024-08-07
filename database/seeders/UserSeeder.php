<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'Author',
            'email' => 'novatawahyudi@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'author',
        ]);
        User::create([
            'username' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'photo_profile' => 'admin.png'
        ]);
        User::create([
            'username' => 'Doctor Agus',
            'email' => 'agus@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'doctor',
        ]);
        User::create([
            'username' => 'Doctor Budiman',
            'email' => 'budi@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'doctor',
        ]);
        User::create([
            'username' => 'Doctor Indrawati',
            'email' => 'indra@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'doctor',
        ]);
    }
}
