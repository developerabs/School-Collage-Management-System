@extends('admin.layouts.master')
@section('content')
<div class="row">
  <div class="col">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/"><i class="ti-home"></i> Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('user.view') }}"> Users</a></li>
      </ol>
  </div>
</div>
<div class="row">
  <div class="col">
      <div class="card mb-3">
          <div class="card-header">
              <div class="caption uppercase">
                  All Users
              </div>
              <div class="tools">
                <a href="{{ route('user.add') }}" class="btn btn-success btn-rounded btn-fw ">Add New</a>
              </div>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover init-datatable" id="">
                      <thead class="thead-light"> 
                        <tr>
                          <th>SL</th>
                          <th>Role</th>
                          <th>Name</th>
                          <th> Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody> 
                          @foreach ($users as $key => $item)
                          <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item->usertype }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ route('user.edit',$item->id) }}" class="btn btn-warning btn-rounded btn-sm">Edit</a>
                                <a href="{{ route('user.delete',$item->id) }}" class="btn btn-danger btn-rounded btn-sm">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div> 
@endsection