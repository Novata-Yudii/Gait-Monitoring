<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    public function run(): void
    {
        Patient::create([
            'user_id' => 3,
            'name' => 'Bambang',
            'age' => 60,
            'gender' => 'Laki-laki',
            'height' => 170,
            'weight' => 68,
            'MCU' => "Kurang Sehat",
            'measurement' => 213,
            'timer' => '2132',
            'speed' => '213213'
        ]);
        Patient::create([
            'user_id' => 3,
            'name' => 'Susilo',
            'age' => 55,
            'gender' => 'Laki-laki',
            'height' => 160,
            'weight' => 78,
            'MCU' => "Buruk",
            'measurement' => 324,
            'timer' => '24342',
            'speed' => '22342'
        ]);
        Patient::create([
            'user_id' => 4,
            'name' => 'Wati',
            'age' => 60,
            'gender' => 'Perempuan',
            'height' => 165,
            'weight' => 68,
            'MCU' => "Kurang Sehat",
            'measurement' => 213,
            'timer' => '2132',
            'speed' => '213213'
        ]);
        Patient::create([
            'user_id' => 4,
            'name' => 'Yudoyono',
            'age' => 70,
            'gender' => 'Laki-laki',
            'height' => 170,
            'weight' => 62,
            'MCU' => "Kurang Sehat",
            'measurement' => 213,
            'timer' => '2132',
            'speed' => '213213'
        ]);
        Patient::create([
            'user_id' => 5,
            'name' => 'Irfan',
            'age' => 20,
            'gender' => 'Laki-laki',
            'height' => 170,
            'weight' => 68,
            'MCU' => "Lumayan sakit",
            'measurement' => 213,
            'timer' => '2132',
            'speed' => '213213'
        ]);
        Patient::create([
            'user_id' => 5,
            'name' => 'Bahdim',
            'age' => 60,
            'gender' => 'Laki-laki',
            'height' => 170,
            'weight' => 68,
            'MCU' => "Kurang Sehat",
            'measurement' => 213,
            'timer' => '2132',
            'speed' => '213213'
        ]);
    }
}
