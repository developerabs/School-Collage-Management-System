<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeeCategory;
use App\Models\StudentClass;
use App\Models\FeeCategoryAmount;

class FeeCategoryAmountController extends Controller
{
    public function index()
    {
        $data['allData'] = FeeCategoryAmount::orderby('id','desc')->get();
        return view('admin.feeCategoryAmount.index',$data);
    }
    public function add()
    {
        $data['FeeCategory'] = FeeCategory::orderby('id','desc')->get();
        $data['StudentClass'] = StudentClass::orderby('id','desc')->get();
        return view('admin.feeCategoryAmount.add',$data);
    }
    public function store(Request $request)
    {
        $request->validate([ 
            'name' => 'required|unique:fee_categories', 
        ]);
        $data = new FeeCategoryAmount(); 
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
        $data['editData'] = FeeCategoryAmount::find($id);
        return view('admin.feeCategory.edit',$data);
    }
    public function update(Request $request, $id)
    {
        $request->validate([ 
            'name' => 'required|unique:fee_categories,name,'.$id, 
        ]);
        $data = FeeCategoryAmount::find($id); 
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
        $data = FeeCategoryAmount::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Fee Category Deleted Successfully',
            'alert-type' => 'error' 
        );
        return redirect()->route('feeCategory.view')->with($notification);
    }
}
