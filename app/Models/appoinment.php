<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appoinment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact',
        'date_of_appoinment',
        'types_of_treatment',
        'doctor',
        'time',
        'remark',
    ];

    public function availabilities()
    {
        return $this->hasMany(DoctorAvailDayTime::class, 'doctor_id');
    }
}
