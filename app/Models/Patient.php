<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'age',
        'gender',
        'height',
        'weight',
        'MCU',
        'measurement',
        'timer',
        'speed'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function anglemeasurement(){
        return $this->hasMany(AngleMeasurement::class);
    }

    public function emgmeasurement(){
        return $this->hasMany(EmgMeasurement::class);
    }
}
