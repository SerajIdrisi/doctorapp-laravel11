<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppoinmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorqualificationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpecialistController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); 

require __DIR__ . '/auth.php';

// frontend route

// appoinment frontend  
Route::get('/', [HomeController::class, 'create']);
Route::get('/cardiology/doctors', [HomeController::class, 'cardiology']);
Route::get('/neurology/doctors', [HomeController::class, 'neurology']);
Route::get('/urology/doctors', [HomeController::class, 'urology']);
Route::get('/proctology/doctors', [HomeController::class, 'proctology']);
Route::get('/orthopedic/doctors', [HomeController::class, 'orthopedic']);
Route::get('/ent/doctors', [HomeController::class, 'ent']);
Route::get('/obstetrics-genecology/doctors', [HomeController::class, 'obstetricsgynaecology']);
Route::get('/appoinment/create/{id}', [AppoinmentController::class, 'create'])->name('appoinment.create');
Route::post('/appoinment/store', [AppoinmentController::class, 'store'])->name('appoinment.store');
// frontend route end


// backend route
Route::middleware('auth')->group(function () {

// doctor route
Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
Route::post('/doctor/store', [DoctorController::class, 'store'])->name('doctor.store');
Route::get('/doctor/index', [DoctorController::class, 'index'])->name('doctor.index');
Route::get('/doctor/edit/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
Route::post('/doctor/update/{id}', [DoctorController::class, 'update'])->name('doctor.update');

// specialist route
Route::get('/specialist/create', [SpecialistController::class, 'create'])->name('specialist.create');
Route::post('/specialist/store', [SpecialistController::class, 'store'])->name('specialist.store');
Route::get('/specialist/index', [SpecialistController::class, 'index'])->name('specialist.index');
Route::get('/specialist/edit/{id}', [SpecialistController::class, 'edit'])->name('specialist.edit');
Route::post('/specialist/update/{id}', [SpecialistController::class, 'update'])->name('specialist.update');
Route::get('/specialist/delete/{id}', [SpecialistController::class, 'destroy'])->name('specialist.delete');

// DoctorQualification Route  

Route::get('/doctorqualification/create',[DoctorqualificationController::class,'create'])->name('doctorqualification.create');
Route::post('/doctorqualification/store',[DoctorqualificationController::class,'store'])->name('doctorqualification.store');
Route::get('/doctorqualification/index',[DoctorqualificationController::class,'index'])->name('doctorqualification.index');
Route::get('/doctorqualification/edit/{id}',[DoctorqualificationController::class,'edit'])->name('doctorqualification.edit');
Route::post('/doctorqualification/update/{id}',[DoctorqualificationController::class,'update'])->name('doctorqualification.update');
Route::get('/doctorqualification/delete/{id}',[DoctorqualificationController::class,'destroy'])->name('doctorqualification.delete');

// appoinment backend
Route::get('/appoinment/index', [AppoinmentController::class, 'index'])->name('appoinment.index');
Route::get('/appoinment/edit/{id}', [AppoinmentController::class, 'edit'])->name('appoinment.edit');
Route::post('/appoinment/update/{id}', [AppoinmentController::class, 'update'])->name('appoinment.update');
Route::get('/appoinment/delete/{id}', [AppoinmentController::class, 'destroy'])->name('appoinment.delete');


});

 