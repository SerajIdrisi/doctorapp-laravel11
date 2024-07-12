<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\doctoravaildaytime;
use App\Models\doctorqualification;
use App\Models\specialist;
use yajra\Datatables\Datatables;

class DoctorController extends Controller
{
    public function create()
    {
        // 7045245495 sonam dubey  11-10-2002 kandivali east 
        // $doctorwithdaytime = doctor::with('availabilities')->find($id);
        $specialist = specialist::all();
        $doctorqualification = doctorqualification::all();
        // echo '<pre>';print_r($doctorqualification);exit;
        return view('admin.doctor.create', compact('specialist', 'doctorqualification'));
    }

    // public function store(Request $request)
    // {
    //     $validate = $request->validate([
    //         'doctor_name' => 'required',
    //         'doctor_qualification' => 'required',
    //         'doctor_img' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
    //         'email' => 'required|email|unique:users',
    //         'gender' => 'required',
    //         'specialist' => 'required',
    //         'remark' => 'required',
    //         'day.*' => 'required|string',
    //         'from.*' => 'required|date_format:H:i',
    //         // 'too.*' => 'required|date_format:H:i|after:from.*',
    //         'too.*' => 'required|date_format:H:i',
    //     ]);
    //     $doctorstore = new doctor();
    //     $doctorstore->doctor_name = $request->doctor_name;
    //     $doctorstore->doctor_qualification = $request->doctor_qualification;
    //     if ($request->hasFile('doctor_img')) {
    //         $file = $request->file('doctor_img');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extension;
    //         $file->move('uploads/doctorimg/', $filename);
    //         $doctorstore->doctor_img = $filename;
    //     }
    //     $doctorstore->email = $request->email;
    //     $doctorstore->gender = $request->gender;
    //     $doctorstore->specialist = $request->specialist;
    //     $doctorstore->remark = $request->remark;
    //     if ($doctorstore->save()) {
    //         if (is_array($request->day)) {
    //             foreach ($request->day as $key => $day) {
    //                 $doctoravaildaytime = new DoctorAvailDayTime();
    //                 $doctoravaildaytime->doctor_id = $doctorstore->id;
    //                 $doctoravaildaytime->day = $day;
    //                 $doctoravaildaytime->from = $request->from[$key];
    //                 $doctoravaildaytime->to = $request->too[$key];
    //                 $doctoravaildaytime->save();
    //             }
    //         }
    //     }
    //     return redirect()->route('doctor.index');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'doctor_name' => 'required',
            'doctor_qualification' => 'required',
            'doctor_img' => 'required|image',
            'email' => 'required|email',
            'gender' => 'required',
            'specialist' => 'required',
            'remark' => 'nullable',
            'day' => 'required|array',
            'from' => 'required',
            'too' => 'required'
        ]);

        $doctorstore = new doctor();
        $doctorstore->doctor_name = $request->doctor_name;
        $doctorstore->doctor_qualification = $request->doctor_qualification;
        if ($request->hasFile('doctor_img')) {
            $file = $request->file('doctor_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/doctorimg/', $filename);
            $doctorstore->doctor_img = $filename;
        }
        $doctorstore->email = $request->email;
        $doctorstore->gender = $request->gender;
        $doctorstore->specialist = $request->specialist;
        // $doctorstore->remark = $request->remark;
        if ($doctorstore->save()) {
            foreach ($request->day as $day) {
                $availability = new doctoravaildaytime();
                $availability->doctor_id = $doctorstore->id;
                $availability->day = $day;
                $availability->from = $request->from;
                $availability->to = $request->too;
                $availability->save();
            }
        }
        return redirect()->route('doctor.index');
    }

    // public function index(Request $request)
    // {
    //     // $doctorlist = doctor::with('availabilities')->orderBy('id', 'desc')->get();
    //     // echo '<pre>';print_r($doctorlist);exit;
    //     if ($request->ajax()) {
    //         // $doctorlist = doctor::orderBy('id', 'desc')->get();
    //         $doctorlist = doctor::with('availabilities')->orderBy('id', 'desc')->get();
    //         return Datatables::of($doctorlist)
    //             ->addColumn('action', function ($doctor) {
    //                 $doctoreditbutton = route('doctor.edit', $doctor->id) . '';
    //                 $appoinmentbutton = route('appoinment.create', $doctor->id);
    //                 return '<a href="' . $doctoreditbutton . '" class="btn btn-info mr-2">Edit</a>' .
    //                     '<a href="' . $appoinmentbutton . '" class="btn btn-primary">Book Appointment</a>';
    //             })
    //             ->editColumn('status', function ($doctor) {
    //                 return $doctor->status ? 'Active' : 'Inactive'; // assuming status is a boolean
    //             })
    //             ->addIndexColumn()
    //             // ->rawColumns()
    //             ->make(true);
    //     }
    //     return view('admin.doctor.index');
    // }

    public function index(Request $request)
    {
        $doctorlist = doctor::with('availabilities')->orderBy('id', 'desc')->get();
        // echo '<pre>';print_r($doctorlist);exit;
        if ($request->ajax()) {
            return Datatables::of($doctorlist)
                ->addColumn('action', function ($doctor) {
                    $doctoreditbutton = route('doctor.edit', $doctor->id);
                    $appoinmentbutton = route('appoinment.create', $doctor->id);
                    return '<a href="' . $doctoreditbutton . '" class="btn btn-info mr-2">Edit</a>' .
                        '<a href="' . $appoinmentbutton . '" class="btn btn-primary">Book Appointment</a>';
                })
                ->editColumn('status', function ($doctor) {
                    return $doctor->status ? 'Active' : 'Inactive'; // assuming status is a boolean
                })
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.doctor.index');
    }

    public function edit($id)
    {
        $doctoredit = doctor::with('availabilities')->find($id);
        $specialist = specialist::all();
        // $doctoravailabledaytime = doctoravaildaytime::where('doctor_id',$id)->get();
        // echo '<pre>';print_r($doctoravailabledaytime);exit;
        $doctorqualification = doctorqualification::all();
        return view('admin.doctor.edit', compact('doctoredit', 'specialist', 'doctorqualification'));
    }

    // public function update(Request $request, $id)
    // {
    //     // echo '<pre>';print_r($request->all());exit;
    //     $validate = $request->validate([
    //         'doctor_name' => 'required',
    //         'doctor_qualification' => 'required',
    //         // 'doctor_img' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
    //         'doctor_img' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
    //         'email' => 'required|email|unique:users',
    //         'gender' => 'required',
    //         'specialist' => 'required',
    //         'status'=> 'required',
    //         'remark' => 'required',
    //         // 'day.*' => 'required|string',
    //         // 'from.*' => 'required|date_format:H:i',
    //         // // 'too.*' => 'required|date_format:H:i|after:from.*',
    //         // 'too.*' => 'required|date_format:H:i',
    //     ]);
    //     $doctorupdate = doctor::find($id);
    //     $doctorupdate->doctor_name = $request->doctor_name;
    //     $doctorupdate->doctor_qualification = $request->doctor_qualification;
    //     if ($request->hasFile('doctor_img')) {
    //         $file = $request->file('doctor_img');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extension;
    //         $file->move('uploads/doctorimg/', $filename);
    //         // if ($doctorupdate->doctor_img) {
    //         //     $oldImagePath = public_path('uploads/doctorimg/' . $doctorupdate->doctor_img);
    //         //     if (file_exists($oldImagePath)) {
    //         //         unlink($oldImagePath);
    //         //     }
    //         // }
    //         $doctorupdate->doctor_img = $filename;
    //     }
    //     $doctorupdate->email = $request->email;
    //     $doctorupdate->gender = $request->gender;
    //     $doctorupdate->specialist = $request->specialist;
    //     $doctorupdate->remark = $request->remark;
    //     if ($doctorupdate->save()) {
    //         // if (is_array($request->day)) {
    //         //     foreach ($request->day as $key => $day) {
    //                 // $doctoravaildaytime = new doctoravaildaytime();
    //                 $doctoravaildaytime = doctoravaildaytime::where('doctor_id', $id)->get();
    //                 foreach ($doctoravaildaytime as $doctortime) {
    //                 // echo '<pre>';print_r($doctoravaildaytime);exit;
    //                 $doctortime->doctor_id = $doctorupdate->id;
    //                 // $doctoravaildaytime->day = $day;
    //                 // $doctoravaildaytime->from = $request->from[$key];
    //                 // $doctoravaildaytime->to = $request->too[$key];
    //                 // $doctoravaildaytime->to = $request->too[$key];
    //                 $doctortime->status = $request->status;
    //                 $doctortime->save();
    //                 }
    //         //     }
    //         // }
    //     }
    //     return redirect()->route('doctor.index');
    // }

    public function update(Request $request, $id)
    {
        $rules = [
            'doctor_name' => 'required',
            'doctor_qualification' => 'required',
            'doctor_img' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'email' => 'required|email|unique:users',
            'gender' => 'required',
            'specialist' => 'required',
            'status' => 'required',
        ];

        // Add conditional validation rule for remark
        if ($request->status !== 'Active') {
            $rules['remark'] = 'required';
        }

        $validate = $request->validate($rules);

        $doctorupdate = doctor::find($id);
        $doctorupdate->doctor_name = $request->doctor_name;
        $doctorupdate->doctor_qualification = $request->doctor_qualification;

        if ($request->hasFile('doctor_img')) {
            $file = $request->file('doctor_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/doctorimg/', $filename);
            $doctorupdate->doctor_img = $filename;
        }

        $doctorupdate->email = $request->email;
        $doctorupdate->gender = $request->gender;
        $doctorupdate->specialist = $request->specialist;
        $doctorupdate->remark = $request->remark;

        if ($doctorupdate->save()) {
            $doctoravaildaytime = doctoravaildaytime::where('doctor_id', $id)->get();
            foreach ($doctoravaildaytime as $doctortime) {
                $doctortime->doctor_id = $doctorupdate->id;
                $doctortime->status = $request->status;
                $doctortime->save();
            }
        }

        return redirect()->route('doctor.index');
    }
}
