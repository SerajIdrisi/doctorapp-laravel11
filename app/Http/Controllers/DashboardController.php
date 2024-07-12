<?php

namespace App\Http\Controllers;

use App\Models\appoinment;
use App\Models\doctor;
use App\Models\specialist;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $totalspecialist = specialist::count();
        $totaldoctors = doctor::count();
        $totalappoinments = appoinment::count();
        return view('dashboard', compact('totalspecialist','totaldoctors','totalappoinments'));
    }
}
