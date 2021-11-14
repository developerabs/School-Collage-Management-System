@extends('admin.layouts.master')
@section('content')
<div class="row">
  <div class="col">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/"><i class="ti-home"></i> Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('feeCategoryAmount.view') }}"> Fee Category Amount</a></li>
      </ol>
  </div>
</div>
<div class="row">
  <div class="col">
      <div class="card mb-3">
          <div class="card-header">
              <div class="caption uppercase">
                  All Fee Category Amount
              </div>
              <div class="tools">
                <a href="{{ route('feeCategoryAmount.add') }}" class="btn btn-success btn-rounded btn-fw ">Add New</a>
              </div>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover init-datatable" id="">
                      <thead class="thead-light"> 
                        <tr>
                          <th>SL</th> 
                          <th>Fee Category</th> 
                          <th>Class</th> 
                          <th>Amount</th> 
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody> 
                          @foreach ($allData as $key => $item)
                          <tr>
                            <td>{{ $key+1 }}</td> 
                            <td>{{ $item->fee_cat_id }}</td> 
                            <td>{{ $item->class_id }}</td> 
                            <td>{{ $item->amount }}</td> 
                            <td>
                                <a href="{{ route('feeCategoryAmount.edit',$item->id) }}" class="btn btn-warning btn-rounded btn-sm">Edit</a>
                                <a href="{{ route('feeCategoryAmount.delete',$item->id) }}" id="delete" class="btn btn-danger btn-rounded btn-sm">Delete</a>
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