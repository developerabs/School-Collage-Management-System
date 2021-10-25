@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('user.view') }}"> Users</a></li>
            <li class="breadcrumb-item"><a href="{{ route('user.edit',$users->id) }}"> Edit User</a></li>
        </ol>
    </div>
</div>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit User</h4> 
        <form class="forms-sample" action="{{ route('user.update',$users->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="usertype">Role *</label>
                        <select name="usertype" class="form-control" id="usertype" required>
                            <option value=""  disabled>Select a Role</option>
                            <option value="Admin" {{ $users->usertype == 'Admin' ? 'selected' : '' }}>Admin</option>
                            <option value="User" {{ $users->usertype == 'User' ? 'selected' : '' }}>User</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputName1">Name *</label>
                        <input type="text" name="name" value="{{ $users->name }}" class="form-control" id="exampleInputName1" placeholder="Name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email address *</label>
                        <input type="email" name="email" value="{{ $users->email }}" class="form-control" id="exampleInputEmail3" placeholder="Email" required>
                    </div>
                </div> 
            </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button> 
        </form>
      </div>
    </div>
  </div>
  @endsection