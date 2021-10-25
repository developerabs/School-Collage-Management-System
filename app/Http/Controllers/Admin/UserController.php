<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data['users'] = User::all();
        return view('admin.users.index',$data);
    }
    public function add()
    {
        return view('admin.users.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'usertype' => 'required',
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);
        $data = new User();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        $notification = array(
            'message' => 'New User Added Successfully',
            'alert-type' => 'success' 
        );
        return redirect()->route('user.view')->with($notification);
    }
    public function edit($id)
    {
        $data['users'] = User::find($id);
        return view('admin.users.edit',$data);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'usertype' => 'required',
            'name' => 'required',
            'email' => 'required',
        ]);
        $data = User::find($id);
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        $notification = array(
            'message' => 'User Updated Successfully',
            'alert-type' => 'info' 
        );
        return redirect()->route('user.view')->with($notification);
    }
    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'error' 
        );
        return redirect()->route('user.view')->with($notification);
    }
}
