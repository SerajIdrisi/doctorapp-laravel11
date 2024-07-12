<?php

namespace App\Http\Controllers;

use App\Models\appoinment;
use App\Models\doctor;
use Illuminate\Http\Request;
use yajra\Datatables\Datatables;
use App\Mail\AppointmentConfirmationForPatient;
use App\Mail\AppointmentConfirmationForDoctor;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class AppoinmentController extends Controller
{
    public function create($id)
    {
        // $doctorwithdaytime = doctor::with(); 
        // Fetch the doctor by ID and eager load their availabilities
        $doctorwithdaytime = doctor::with('availabilities')->find($id);

        $doctors = doctor::find($id);

        // Check if the doctor exists
        // if (!$doctorwithdaytime) {
        //     return redirect()->route('some.route')->with('error', 'Doctor not found');
        // }

        // Pass the doctor data to the view
        return view('frontend.appoinment.create', compact('doctorwithdaytime', 'doctors'));
    }


    public function store(Request $request)
    {
        // echo '<pre>';print_r($request->all());exit;
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'day_of_appointment' => 'required|string',
            // 'types_of_treatment' => 'required',
            // 'doctor' => 'required',
            'time' => 'required',
            // 'remark' => 'required',
        ]);
        $storeappoinment = new appoinment();
        $storeappoinment->name = $request->name;
        $storeappoinment->email = $request->email;
        $storeappoinment->contact = $request->contact;
        $storeappoinment->day_of_appointment = $request->day_of_appointment;
        $storeappoinment->types_of_treatment = $request->types_of_treatment;
        $storeappoinment->doctor = $request->doctor;
        $storeappoinment->time = $request->time;
        $storeappoinment->remark = $request->remark;
        if ($storeappoinment->save()) {
            // Get doctor detail

            Log::info('Appointment saved successfully', ['appointment' => $storeappoinment]);
            // print_r($request->email);exit;

            // Send email to patient
            // Mail::to($storeappoinment->email)->send(new AppointmentConfirmationForPatient($storeappoinment));

            // // Send email to doctor
            // Mail::to($request->demail)->send(new AppointmentConfirmationForDoctor($storeappoinment));


            try {
                Mail::to($storeappoinment->email)->send(new AppointmentConfirmationForPatient($storeappoinment));
                echo 'email sent successfully to patient';
            } catch (\Exception $e) {
                Log::error('Failed to send email to patient: ' . $e->getMessage());
            }
    
            // Send email to doctor
            try {
                // print_r($request->demail);exit;
                Mail::to($request->demail)->send(new AppointmentConfirmationForDoctor($storeappoinment));
                echo 'email sent successfully to doctor';
            } catch (\Exception $e) {
                Log::error('Failed to send email to doctor: ' . $e->getMessage());
            }

        }
        return redirect()->route('appoinment.index')->with('success', 'Appointment booked and emails sent.');
    }

    // return redirect()->route('appointments.index')->with('success', 'Appointment booked and emails sent.');

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $appoinmentlist = appoinment::all();
            return Datatables::of($appoinmentlist)
                ->addColumn('action', function ($row) {
                    $appoinmenteditbutton = route('appoinment.edit', $row->id);
                    $appoinmentdeletebutton = route('appoinment.delete', $row->id);
                    return
                        '<a href="' . $appoinmenteditbutton . '" class="btn btn-primary">Edit</a>
                    <a href="' . $appoinmentdeletebutton . '" class="btn btn-danger">Delete</a>';
                })
                ->addIndexColumn()
                // ->rawColumns()
                ->make(true);
        }
        return view('admin.appoinment.index');
    }

    public function edit($id)
    {
        $appoinmentedit = appoinment::find($id);
        // echo '<pre>';print_r($appoinmentedit);exit;
        $doctorwithdaytime = Doctor::with('availabilities')->find($id);
        // echo '<pre>';print_r($doctorwithdaytime);exit;
        return view('admin.appoinment.edit', compact('appoinmentedit', 'doctorwithdaytime'));
    }


    // public function edit($id)
    // {
    //     $appoinmentedit = Appoinment::find($id);
    //     $doctorwithdaytime = Doctor::with('availabilities')->find($appoinmentedit->doctor_id);
    //     // echo '<pre>';print_r($doctorwithdaytime);exit;
    //     return view('admin.appoinment.edit', compact('appoinmentedit', 'doctorwithdaytime'));
    // }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'day_of_appointment' => 'required|string',
            'types_of_treatment' => 'required',
            'doctor' => 'required',
            'time' => 'required',
            'remark' => 'required',
        ]);
        $appoinmentupdate = appoinment::find($id);
        $appoinmentupdate->name = $request->name;
        $appoinmentupdate->email = $request->email;
        $appoinmentupdate->contact = $request->contact;
        $appoinmentupdate->day_of_appointment = $request->day_of_appointment;
        $appoinmentupdate->types_of_treatment = $request->types_of_treatment;
        $appoinmentupdate->doctor = $request->doctor;
        $appoinmentupdate->time = $request->time;
        $appoinmentupdate->remark = $request->remark;
        $appoinmentupdate->save();
        return redirect()->route('appoinment.index');
    }

    public function destroy($id)
    {
        $appoinmentdelete = appoinment::find($id);
        $appoinmentdelete->delete();
        return redirect()->route('appoinment.index');
    }
}
