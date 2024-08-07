<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmgMeasurement extends Model
{
    use HasFactory;

    protected $table = 'emg_measurements';

    protected $fillable = [
        'patient_id',
        'emg1',
        'emg2',
        'emg3',
        'emg4'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
