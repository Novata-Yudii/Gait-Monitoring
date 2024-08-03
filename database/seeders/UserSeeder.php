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
            'name' => 'Novata Dwi Wahyudi',
            'email' => 'novatawahyudi@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'author',
            'photo_profile' => 'yudi.jpg'
        ]);
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'photo_profile' => 'admin.png'
        ]);
        User::create([
            'name' => 'Doctor Agus Suseno',
            'email' => 'agus@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'doctor',
            'photo_profile' => 'agus.png'
        ]);
    }
}
