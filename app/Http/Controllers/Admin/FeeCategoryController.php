<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeeCategory;

class FeeCategoryController extends Controller
{
    public function index()
    {
        $data['allData'] = FeeCategory::orderby('id','desc')->get();
        return view('admin.feeCategory.index',$data);
    }
    public function add()
    {
        return view('admin.feeCategory.add');
    }
    public function store(Request $request)
    {
        $request->validate([ 
            'name' => 'required|unique:fee_categories', 
        ]);
        $data = new FeeCategory(); 
        $data->name = $request->name; 
        $data->save();
        $notification = array(
            'message' => 'New Fee Category Added Successfully',
            'alert-type' => 'success' 
        );
        return redirect()->route('feeCategory.view')->with($notification);
    }
    public function edit($id)
    {
        $data['editData'] = FeeCategory::find($id);
        return view('admin.feeCategory.edit',$data);
    }
    public function update(Request $request, $id)
    {
        $request->validate([ 
            'name' => 'required|unique:fee_categories,name,'.$id, 
        ]);
        $data = FeeCategory::find($id); 
        $data->name = $request->name;  
        $data->save();
        $notification = array(
            'message' => 'Fee Category Updated Successfully',
            'alert-type' => 'info' 
        );
        return redirect()->route('feeCategory.view')->with($notification);
    }
    public function delete($id)
    {
        $data = FeeCategory::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Fee Category Deleted Successfully',
            'alert-type' => 'error' 
        );
        return redirect()->route('feeCategory.view')->with($notification);
    }
}
