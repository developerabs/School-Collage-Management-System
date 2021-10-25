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
        return redirect()->route('class.view');
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
        return redirect()->route('class.view');
    }
    public function delete($id)
    {
        $data = StudentClass::find($id);
        $data->delete();
        return redirect()->route('class.view');
    }
}
