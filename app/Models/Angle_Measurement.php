<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angle_Measurement extends Model
{
    use HasFactory;

    protected $table = 'angle_measurements';

    protected $fillable = [
        'patienId',
        'doctorId',
        'leftHip',
        'rightHip',
        'leftKnee',
        'rightKnee',
        'leftAnkle',
        'rightAnkle'
    ];
}
