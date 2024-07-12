<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctorqualification extends Model
{
    use HasFactory;

    protected $table = 'doctor_qualification';
    protected $fillable = [
        'doctor_qulification',
    ];
}
