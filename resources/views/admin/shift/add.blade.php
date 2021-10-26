@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('shift.view') }}"> Shift</a></li>
            <li class="breadcrumb-item"><a href="{{ route('shift.add') }}"> Add Shift</a></li>
        </ol>
    </div>
</div>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Shift</h4> 
        <form class="forms-sample" action="{{ route('shift.store') }}" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row"> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputName1">Name *</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{ old('name') }}" placeholder="Name" required>
                    </div>
                </div>  
            </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button> 
        </form>
      </div>
    </div>
  </div>
  @endsection