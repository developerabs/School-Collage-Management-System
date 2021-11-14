@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('feeCategoryAmount.view') }}"> Fee Category Amount</a></li>
            <li class="breadcrumb-item"><a href="{{ route('feeCategoryAmount.add') }}"> Add Fee Category Amount</a></li>
        </ol>
    </div>
</div>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Fee Category Amount</h4> 
        <form class="forms-sample" action="{{ route('feeCategoryAmount.store') }}" method="POST">
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
          <div class="add_fee_category_amount_item">
            <div class="row"> 
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="amount">Fee Category *</label>
                      <select name="" id="" class="form-control">
                        <option value="" disabled selected>Select a Fee Category</option>
                          @foreach ($FeeCategory as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                      </select>
                  </div>
              </div>  
              <div class="col-md-4"> 
                <div class="form-group">
                    <label for="amount">Class *</label>
                    <select name="" id="" class="form-control">
                      <option value="" disabled selected>Select a Class</option>
                        @foreach ($StudentClass as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div> 
              </div>  
              <div class="col-md-4">  
                <div class="form-group">
                    <label for="amount">Amount *</label>
                    <input type="text" name="amount" class="form-control" id="amount" value="{{ old('amount') }}" placeholder="Amount" required>
                </div> 
              </div>  
              <div class="col-md-4 mt-4">  
                <button type="button" class="btn btn-forest mb-2" id="plus_fee_cat_amount"><i class="ti-plus"></i></button>
              </div>  
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary me-2">Submit</button> 
        </form>
      </div>
    </div>
  </div>

  {{-- add more fee category amount --}}
  <div class="d-none">
    <div class="add_more_fee_category_amount" id="add_more_fee_category_amount">
      <div class="remove_fee_category_amount" id="remove_fee_category_amount">
        <div class="row">
          <div class="col-md-4"> 
            <div class="form-group">
                <label for="amount">Class *</label>
                <select name="" id="" class="form-control">
                  <option value="" disabled selected>Select a Class</option>
                    @foreach ($StudentClass as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div> 
          </div>  
          <div class="col-md-4">  
            <div class="form-group">
                <label for="amount">Amount *</label>
                <input type="text" name="amount" class="form-control" id="amount" value="{{ old('amount') }}" placeholder="Amount" required>
            </div> 
          </div>  
          <div class="col-md-4 mt-4">  
            <button type="button" class="btn btn-forest mb-2" id="plus_fee_cat_amount"><i class="ti-plus"></i></button>
            <button type="button" class="btn btn-danger mb-2" id="minus_fee_cat_amount"><i class="ti-minus"></i></button>
          </div> 
        </div>
      </div>
    </div>
  </div>


  <script>
    $(document).ready(function(){
      var i = 0;
      $(document).on('click','#plus_fee_cat_amount',function(){
        var add_more_fee_category_amount = $('#add_more_fee_category_amount').html();
        $(this).closest('.add_fee_category_amount_item').append(add_more_fee_category_amount);
        i++;
      });
      $(document).on('click','#minus_fee_cat_amount',function(){ 
        $(this).closest('.remove_fee_category_amount').remove();
        i--;
      });
    });
  </script>
  @endsection