@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('year.view') }}"> Years</a></li> 
            <li class="breadcrumb-item"><a href="{{ route('year.edit',$editData->id) }}"> Edit Year</a></li>
        </ol>
    </div>
</div>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Year</h4> 
        <form class="forms-sample" action="{{ route('year.update',$editData->id) }}" method="POST">
            @csrf
            <div class="row"> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputName1">Name *</label>
                        <input type="text" name="name" class="form-control" value="{{ $editData->name }}" id="exampleInputName1" placeholder="Name" required>
                    </div>
                </div>  
            </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button> 
        </form>
      </div>
    </div>
  </div>
  @endsection