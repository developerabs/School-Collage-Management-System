<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentClass;

class ClassController extends Controller
{
    public function index()
    {
        $data['allData'] = StudentClass::all();
        return view('admin.class.index',$data);
    }
    public function add()
    {
        return view('admin.class.add');
    }
    public function store(Request $request)
    {
        $request->validate([ 
            'name' => 'required', 
        ]);
        $data = new StudentClass(); 
        $data->name = $request->name; 
        $data->save();
        $notification = array(
            'message' => 'New Class Added Successfully',
            'alert-type' => 'success' 
        );
        return redirect()->route('class.view')->with($notification);
    }
    public function edit($id)
    {
        $data['editData'] = StudentClass::find($id);
        return view('admin.class.edit',$data);
    }
    public function update(Request $request, $id)
    {
        $request->validate([ 
            'name' => 'required', 
        ]);
        $data = StudentClass::find($id); 
        $data->name = $request->name;  
        $data->save();
        $notification = array(
            'message' => 'Class Updated Successfully',
            'alert-type' => 'info' 
        );
        return redirect()->route('class.view')->with($notification);
    }
    public function delete($id)
    {
        $data = StudentClass::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Class Deleted Successfully',
            'alert-type' => 'error' 
        );
        return redirect()->route('class.view')->with($notification);
    }
}
