<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentShift;

class StudentShiftController extends Controller
{
    public function index()
    {
        $data['allData'] = StudentShift::all();
        return view('admin.shift.index',$data);
    }
    public function add()
    {
        return view('admin.shift.add');
    }
    public function store(Request $request)
    {
        $request->validate([ 
            'name' => 'required|unique:student_shifts', 
        ]);
        $data = new StudentShift(); 
        $data->name = $request->name; 
        $data->save();
        $notification = array(
            'message' => 'New Shift Added Successfully',
            'alert-type' => 'success' 
        );
        return redirect()->route('shift.view')->with($notification);
    }
    public function edit($id)
    {
        $data['editData'] = StudentShift::find($id);
        return view('admin.shift.edit',$data);
    }
    public function update(Request $request, $id)
    {
        $request->validate([ 
            'name' => 'required|unique:student_shifts,name,'.$id, 
        ]);
        $data = StudentShift::find($id); 
        $data->name = $request->name;  
        $data->save();
        $notification = array(
            'message' => 'Shift Updated Successfully',
            'alert-type' => 'info' 
        );
        return redirect()->route('shift.view')->with($notification);
    }
    public function delete($id)
    {
        $data = StudentShift::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Shift Deleted Successfully',
            'alert-type' => 'error' 
        );
        return redirect()->route('shift.view')->with($notification);
    }
}
