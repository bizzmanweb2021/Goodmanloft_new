@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Add Stock</h6>
@endsection
@section('content')
<div class="container-fluid py-4 pt-5">
    <div class="col-12">
    <div class="card h-100">
        <div class="card-body p-3">
            <form method="POST" action="{{route('admin.stockStore')}}" id="Product_form" enctype="multipart/form-data">
                @csrf
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <label class="text-truncate  text-body ms-3 w-80 mb-0">Product Name</label>
                            <select id="product_name" name="product_name" class="form-control" >
                                <option value="" >--Select--</option>
                                    @foreach (App\Models\product::all() as $product)
                                    <option value="{{$product->id}}">{{$product->product_name}}</option>
                                    @endforeach
                            </select>
                        </div><br>
                        <div class="col-md-4">
                            <label class="text-truncate  text-body ms-3 w-80 mb-0">Stock Quantity</label>
                            <input type="number" name="stock_available" class="form-control" style="width:100%" min="1" max="100">
                        </div><br>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="upload">
                                <label class="text-truncate  text-body ms-3 w-80 mb-0">Upload Stock Image</label>
                                <input type="file" name="stock_image" class="form-control" id="stock_image">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="text-truncate  text-body ms-3 w-80 mb-0">Stock Input Date</label>
                            <input type="date" name="stock_input_date" class="form-control" style="width:100%" min="1" max="100">
                        </div><br>
                    </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                    <button type="submit" class="btn btn-info btn-sm" style="background-color: #bf9f6c">ADD</button>
                    <button type="reset" class="btn btn-light btn-sm" name="submit">Return</button>
                    </div>
                  </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection
