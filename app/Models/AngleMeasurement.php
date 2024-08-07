<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AngleMeasurement extends Model
{
    use HasFactory;

    protected $table = 'angle_measurements';

    protected $fillable = [
        'patient_id',
        'leftHip',
        'rightHip',
        'leftKnee',
        'rightKnee',
        'leftAnkle',
        'rightAnkle'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
