<?php

namespace Database\Seeders;

use App\Models\EmgMeasurement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmgMeasurementSeeder extends Seeder
{
    public function run(): void
    {
        EmgMeasurement::create([
            'patient_id' => 1,
            'emg1' => 'Bambang',
            'emg2' => 'sdfsdfsd',
            'emg3' => 'dfsfdsdsf',
            'emg4' => 'sdfsdfsd'
        ]);
        EmgMeasurement::create([
            'patient_id' => 2,
            'emg1' => 'Susilo',
            'emg2' => 'sdfsdfsd',
            'emg3' => 'dfsfdsdsf',
            'emg4' => 'sdfsdfsd'
        ]);
        EmgMeasurement::create([
            'patient_id' => 3,
            'emg1' => 'Wati',
            'emg2' => 'sdfsdfsd',
            'emg3' => 'dfsfdsdsf',
            'emg4' => 'sdfsdfsd'
        ]);
        EmgMeasurement::create([
            'patient_id' => 4,
            'emg1' => 'Yudoyono',
            'emg2' => 'sdfsdfsd',
            'emg3' => 'dfsfdsdsf',
            'emg4' => 'sdfsdfsd'
        ]);
        EmgMeasurement::create([
            'patient_id' => 5,
            'emg1' => 'Irfan',
            'emg2' => 'sdfsdfsd',
            'emg3' => 'dfsfdsdsf',
            'emg4' => 'sdfsdfsd'
        ]);
        EmgMeasurement::create([
            'patient_id' => 6,
            'emg1' => 'Bahdim',
            'emg2' => 'sdfsdfsd',
            'emg3' => 'dfsfdsdsf',
            'emg4' => 'sdfsdfsd'
        ]);
    }
}
