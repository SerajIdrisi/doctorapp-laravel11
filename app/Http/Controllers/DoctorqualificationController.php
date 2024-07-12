<?php

namespace App\Http\Controllers;

use App\Models\doctorqualification;
use Illuminate\Http\Request;
use yajra\Datatables\Datatables;

class DoctorqualificationController extends Controller
{
    public function create()
    {
        return view("admin.doctorqualification.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "doctor_qulification" => 'required|unique:doctor_qualification,doctor_qulification',
        ]);
        $doctorqualificationstore = new doctorqualification();
        $doctorqualificationstore->doctor_qulification = $request->doctor_qulification;
        $doctorqualificationstore->save();
        return redirect()->route('doctorqualification.index');
    }
    public function index(Request $request)
    {
        $doctorqualificationlist = doctorqualification::orderBy('id','desc');
        if ($request->ajax()) {
            return Datatables::of($doctorqualificationlist)
                ->addColumn('action', function ($row) {
                // edit and delete both option here
                    // $editbtn = route('doctorqualification.edit', $row->id);
                    // $deletebtn = route('doctorqualification.delete', $row->id);
                    // return '<a href="' . $editbtn . '" class="btn btn-primary">Edit</a> 
                    // <a href="' . $deletebtn . '" class="btn btn-danger">Delete</a>';

                // edit and delete both option end here

                    $editbtn = route('doctorqualification.edit', $row->id);
                    return '<a href="' . $editbtn . '" class="btn btn-primary">Edit</a>';
                })
                ->addIndexColumn()
                ->make(true);
        }
        return view("admin.doctorqualification.index");
    }

    public function edit($id){
        $doctorqualificationedit = doctorqualification::find($id);
        return view('admin.doctorqualification.edit', compact('doctorqualificationedit'));
    }

    public function update(Request $request, $id){
        $doctorqualificationupdate = doctorqualification::find($id);
        // $doctorqualificationupdate->update($request->all());
        $doctorqualificationupdate->doctor_qulification = $request->doctor_qulification;
        $doctorqualificationupdate->save();
        return redirect()->route('doctorqualification.index');
    }

    public function destroy($id){  
        $doctorqualificationdelete = doctorqualification::find($id);
        $doctorqualificationdelete->delete();
        return redirect()->route('doctorqualification.index');
    } 
}
