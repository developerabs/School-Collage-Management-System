<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentYear;

class StudentYearController extends Controller
{
    public function index()
    {
        $data['allData'] = StudentYear::all();
        return view('admin.year.index',$data);
    }
    public function add()
    {
        return view('admin.year.add');
    }
    public function store(Request $request)
    {
        $request->validate([ 
            'name' => 'required', 
        ]);
        $data = new StudentYear(); 
        $data->name = $request->name; 
        $data->save();
        return redirect()->route('year.view');
    }
    public function edit($id)
    {
        $data['editData'] = StudentYear::find($id);
        return view('admin.year.edit',$data);
    }
    public function update(Request $request, $id)
    {
        $request->validate([ 
            'name' => 'required', 
        ]);
        $data = StudentYear::find($id); 
        $data->name = $request->name;  
        $data->save();
        return redirect()->route('year.view');
    }
    public function delete($id)
    {
        $data = StudentYear::find($id);
        $data->delete();
        return redirect()->route('year.view');
    }
}
