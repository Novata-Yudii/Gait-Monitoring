<?php

namespace Database\Seeders;

use App\Models\AngleMeasurement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AngleMeasurementSeeder extends Seeder
{
    public function run(): void
    {
        AngleMeasurement::create([
            'patient_id' => 1,
            'leftHip' => 'Bambang',
            'rightHip' => 'sdfdsfdsf',
            'leftKnee' => 'sasadsda',
            'rightKnee' => 'sdfsaf',
            'leftAnkle' => 'sdvsdv',
            'rightAnkle' => 'sdcsdcsd',
        ]);
        AngleMeasurement::create([
            'patient_id' => 2,
            'leftHip' => 'Susilo',
            'rightHip' => 'sdfdsfdsf',
            'leftKnee' => 'sasadsda',
            'rightKnee' => 'sdfsaf',
            'leftAnkle' => 'sdvsdv',
            'rightAnkle' => 'sdcsdcsd',
        ]);
        AngleMeasurement::create([
            'patient_id' => 3,
            'leftHip' => 'Wati',
            'rightHip' => 'sdfdsfdsf',
            'leftKnee' => 'sasadsda',
            'rightKnee' => 'sdfsaf',
            'leftAnkle' => 'sdvsdv',
            'rightAnkle' => 'sdcsdcsd',
        ]);
        AngleMeasurement::create([
            'patient_id' => 4,
            'leftHip' => 'Yudoyono',
            'rightHip' => 'sdfdsfdsf',
            'leftKnee' => 'sasadsda',
            'rightKnee' => 'sdfsaf',
            'leftAnkle' => 'sdvsdv',
            'rightAnkle' => 'sdcsdcsd',
        ]);
        AngleMeasurement::create([
            'patient_id' => 5,
            'leftHip' => 'Irfan',
            'rightHip' => 'sdfdsfdsf',
            'leftKnee' => 'sasadsda',
            'rightKnee' => 'sdfsaf',
            'leftAnkle' => 'sdvsdv',
            'rightAnkle' => 'sdcsdcsd',
        ]);
        AngleMeasurement::create([
            'patient_id' => 6,
            'leftHip' => 'Bahdim',
            'rightHip' => 'sdfdsfdsf',
            'leftKnee' => 'sasadsda',
            'rightKnee' => 'sdfsaf',
            'leftAnkle' => 'sdvsdv',
            'rightAnkle' => 'sdcsdcsd',
        ]);
    }
}
