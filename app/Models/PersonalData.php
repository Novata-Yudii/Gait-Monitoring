<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalData extends Model
{
    use HasFactory;
    protected $table = 'personal_datas';
    protected $fillable = [
        'user_id',
        'fullname',
        'company',
        'spesialis',
        'country',
        'addres',
        'phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
