<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctorId',
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
}
