<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctoravaildaytime extends Model
{
    use HasFactory;

    protected $table = 'doctor_avail_day_time';
    protected $fillable = [
        'doctor_id',
        'day',
        'from',
        'to',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    
}
