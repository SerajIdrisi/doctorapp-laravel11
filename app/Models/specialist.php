<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialist extends Model
{
    use HasFactory;

    protected $table = 'specialization';
    protected $fillable = ['specialist'];   
}
