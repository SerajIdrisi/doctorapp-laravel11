<?php

namespace App\Http\Controllers;

use App\Models\specialist;
use Illuminate\Http\Request;
use yajra\Datatables\Datatables;

class SpecialistController extends Controller
{
    public function create()
    {
        return view('admin.specialist.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'specialist' => 'required|unique:specialization,specialist',
    ]);
        $specialiststore = new specialist();
        $specialiststore->specialist = $request->specialist;
        $specialiststore->save();
        return redirect()->route('specialist.index');
    }

    public function index(Request $request)
    {
        $specialist = specialist::orderBy('id','desc');   
        if($request->ajax()){
            return Datatables::of($specialist)
            ->addColumn('action', function($row){
                $editbtn = route('specialist.edit', $row->id);
                $deletebtn = route('specialist.delete', $row->id);
                return '<a href="'.$editbtn.'" class="btn btn-primary">Edit</a> 
                        <a href="'.$deletebtn.'" class="btn btn-danger">Delete</a>';
            })
            ->addIndexColumn()
            ->make(true);
        }
        return view('admin.specialist.index');
    }

    public function edit($id){
        $specialistedit = specialist::find($id);
        return view('admin.specialist.edit', compact('specialistedit'));
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'specialist' => 'required',
        ]);
        $specialistupdate = specialist::find($id);
        $specialistupdate->specialist = $request->specialist;
        $specialistupdate->save();
        return redirect()->route('specialist.index');
    }

    public function destroy($id){
        $specialistdelete = specialist::find($id); 
        $specialistdelete->delete();
        return redirect()->route('specialist.index');

    }
}
