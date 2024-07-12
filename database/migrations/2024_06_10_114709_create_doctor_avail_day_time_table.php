<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('doctor_avail_day_time', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->string('day');
            $table->time('from');
            $table->time('to');
            $table->timestamps();
            $table->foreign('doctor_id')->references('id')->on('doctor');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('doctor_avail_day_time');
    }
};
