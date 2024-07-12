<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_name', 
        'doctor_qualification', 
        'doctor_img', 
        'email', 
        'gender', 
        'specialist',
        'remark',
    ];
    
    protected $table = 'doctor';

    public function availabilities()
    {
        return $this->hasMany(DoctorAvailDayTime::class, 'doctor_id');
    }
}
