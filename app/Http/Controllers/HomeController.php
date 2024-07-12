<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\doctoravaildaytime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create()
    {
        // $doctorall = doctor::limit(4)->get();
        $doctorall = doctor::with('availabilities')->get();
        // echo '<pre>';print_r($doctorall);exit;
        $inactivedoctors = doctoravaildaytime::where('status','Inactive')->get();
        // echo '<pre>';print_r($inactivedoctors);exit;
        return view('index', compact('doctorall','inactivedoctors'));
    }
    public function cardiology(){
        // $doctorall = doctor::all();
        $cardiology_doctor = doctor::where('specialist', 'Cardiology')->get();
        return view('frontend.consultants.cardiology', compact('cardiology_doctor'));
    }

    public function neurology(){
        $doctorall = doctor::all();
        $neurology_doctor = doctor::where('specialist', 'Neurology')->get();
        return view('frontend.consultants.neurology', compact('doctorall','neurology_doctor'));
    }

    public function urology(){
        $doctorall = doctor::all();
        $urology_doctor = doctor::where('specialist', 'Urology')->get();
        return view('frontend.consultants.urology', compact('doctorall','urology_doctor'));
    }

    public function proctology(){
        $doctorall = doctor::all();
        // $cardiology_doctor = doctor::where('specialist', 'Cardiology')->get();
        // $neurology_doctor = doctor::where('specialist', 'Neurology')->get();
        // $urology_doctor = doctor::where('specialist', 'Urology')->get();
        $proctology_doctor = doctor::where('specialist', 'Proctology')->get();
        // $orthopedic_doctor = doctor::where('specialist', 'Orthopedic')->get();
        // $ent_doctor = doctor::where('specialist', 'Ent')->get();
        // $obs_gynaecology_doctor = doctor::where('specialist', 'Obstetrics & Gynaecology')->get();
        return view('frontend.consultants.proctology', compact('doctorall','proctology_doctor'));
        // 'neurology_doctor','urology_doctor','proctology_doctor','orthopedic_doctor','ent_doctor','obs_gynaecology_doctor'
    }

    public function orthopedic(){
        $doctorall = doctor::all();
        $orthopedic_doctor = doctor::where('specialist', 'Orthopedic')->get();
        return view('frontend.consultants.orthopedic', compact('doctorall','orthopedic_doctor'));
    }
    public function ent(){
        $doctorall = doctor::all();
        $ent_doctor = doctor::where('specialist', 'ENT')->get();
        return view('frontend.consultants.ent', compact('doctorall','ent_doctor'));
    }

    public function obstetricsgynaecology(){
        $doctorall = doctor::all();
        $obs_gynaecology_doctor = doctor::where('specialist', 'Obstetrics-genecology')->get();
        return view('frontend.consultants.obstetricsgynaecology', compact('doctorall','obs_gynaecology_doctor'));
    }
}
