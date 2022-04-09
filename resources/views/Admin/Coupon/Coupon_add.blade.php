@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Add Coupon</h6>
@endsection
@section('content')
<div class="container-fluid py-4 pt-5">
    <div class="col-12">
        <div class="card h-100">
        <div class="card-body p-3">
            <form method="POST" action="{{route('admin.CouponStore')}}" id="Product_form" enctype="multipart/form-data">
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
                {{method_field('POST')}}
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Coupon Name</label>
                        <input type="text" name="coupon_name" class="form-control" style="width:100%">
                        @error('coupon_name')
                        <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div><br>
                    <div class="col-md-6">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Coupon Code</label>
                        <input type="text" name="coupon_code" class="form-control" style="width:100%" placeholder="">
                    </div><br>
                </div>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Coupon Description</label>
                        <textarea type="text" name="coupon_description" class="form-control" style="heigth:100px; width:100%;"></textarea>
                    </div><br>
                </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Coupon Validation Start Date</label>
                        <input type="Date" name="start_date" class="form-control" style="width:100%" placeholder="">
                    </div><br>
                    <div class="col-md-4">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Coupon Validation End Date</label>
                        <input type="Date" name="end_date" class="form-control" style="width:100%" placeholder="">
                    </div><br>
                    <div class="col-md-4">
                        <label class="text-truncate  text-body ms-3 w-80 mb-2">Status</label></br>
                        <input type="radio" id="status" name="status" value="active"><label for="">Active</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="status" value="inactive"><label for="">Inactive</label>
                    </div><br>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Discount Type</label>
                        <select  name="discount_type" id="amount_discount" class="form-control amount_discount">
                            <option value="">--Choose Amount--</option>
                            <option value="flatAmount">Flat Amount</option>
                            <option value="percentAmount">Percentage Amount</option>
                        </select>
                    </div>
                    <div class="col-md-4 amount">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0"></label>
                        <input type="text" name="discount_amount" class="form-control" style="width:100%">
                    </div><br>
                    <div class="col-md-4">
                        <div class="upload">
                            <label class="text-truncate  text-body ms-3 w-80 mb-0">Upload Coupon Banner</label>
                            <input type="file" name="Banner" class="form-control" id="Banner">
                        </div>
                    </div></br></br></br>
                    @error('Banner')
                    <span style="color:red">{{ $message }}</span>
                    @enderror
                </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-info btn-sm" style="background-color: #bf9f6c">ADDto</button>
                        <button type="reset" class="btn btn-light btn-sm" name="submit">Return</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
@section('text/javascript')
<script>
    alert(5 + 6);
</script>
@endsection
