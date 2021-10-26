<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentGroup;

class StudentGroupController extends Controller
{
    public function index()
    {
        $data['allData'] = StudentGroup::all();
        return view('admin.group.index',$data);
    }
    public function add()
    {
        return view('admin.group.add');
    }
    public function store(Request $request)
    {
        $request->validate([ 
            'name' => 'required|unique:student_groups', 
        ]);
        $data = new StudentGroup(); 
        $data->name = $request->name; 
        $data->save();
        $notification = array(
            'message' => 'New Group Added Successfully',
            'alert-type' => 'success' 
        );
        return redirect()->route('group.view')->with($notification);
    }
    public function edit($id)
    {
        $data['editData'] = StudentGroup::find($id);
        return view('admin.group.edit',$data);
    }
    public function update(Request $request, $id)
    {
        $request->validate([ 
            'name' => 'required|unique:student_groups,name,'.$id, 
        ]);
        $data = StudentGroup::find($id); 
        $data->name = $request->name;  
        $data->save();
        $notification = array(
            'message' => 'Group Updated Successfully',
            'alert-type' => 'info' 
        );
        return redirect()->route('group.view')->with($notification);
    }
    public function delete($id)
    {
        $data = StudentGroup::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Group Deleted Successfully',
            'alert-type' => 'error' 
        );
        return redirect()->route('group.view')->with($notification);
    }
}
