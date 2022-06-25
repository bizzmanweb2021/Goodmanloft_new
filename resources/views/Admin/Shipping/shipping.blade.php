@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Add Shipping</h6>
@endsection
@section('content')
<div class="container-fluid py-4 pt-5">
    <div class="col-12">
      <div class="card h-100">
        <div class="card-body p-3">
          <form method="POST" action="{{ route('admin.ShippingStore') }}" id="Product_form" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
            <div class="alert alert-warning">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="row mb-4">
                <div class="col-md-6">
                    <label class="text-truncate  text-body ms-3 w-80 mb-0">Country</label>
                    <div class="col-75">
                        <select id="country_name" name="country_name" class="form-control" style="width:95%">
                            <option value="">Select</option>
                            @foreach ($Getcountrylist as $Country)
                            <option value="{{$Country->id}}">{{$Country->country_name}} </option>
                            @endforeach
                    </select>
                    </div>
                </div><br>
                <div class="col-md-6">
                  <label class="text-truncate  text-body ms-3 w-80 mb-0">Delivery Amount</label>
                  <input type="text" name="delivery_amount" class="form-control" style="width:100%" placeholder="$">
                </div><br>
            </div>
            <div class="col-md-4">
                <button type="add" class="btn btn-info btn-sm" style="background-color: #bf9f6c" name="submit" value="Addto">ADD</button>
                <button type="reset" class="btn btn-light btn-sm" name="submit">Return</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


@endsection
