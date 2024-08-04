<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmgMeasurement extends Model
{
    use HasFactory;

    protected $table = 'emg_measurements';

    protected $fillable = [
        'patienId',
        'doctorId',
        'emg1',
        'emg2',
        'emg3',
        'emg4'
    ];
}
