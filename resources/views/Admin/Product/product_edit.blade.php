@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Edit Product</h6>
@endsection
@section('content')

<div class="container-fluid py-4 pt-5">
  <div class="col-12">
    <div class="card h-100">
      <div class="card-body p-3">
        <form method="POST" action="{{route('admin.update.prod',$prod[0]->id)}}">
          @csrf
            <div class="row mb-4">
                <div class="col-md-4">
                    <label class="text-truncate  text-body ms-3 w-80 mb-0">Product Name</label>
                    <input type="text" name="product_name" class="form-control" style="width:100%" value="{{ $prod[0]->product_name }}">
                </div><br>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                  <label class="text-truncate  text-body ms-3 w-80 mb-0">Product Description</label>
                  <textarea type="text" name="Product_Description" class="form-control" style="heigth:100px; width:100%;">{{ $prod[0]->Product_Description }}</textarea>
                </div><br>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <label class="text-truncate  text-body ms-3 w-80 mb-0">Product Dimension</label>
                    <input type="text" name="Product_Dimension" value="{{ $prod[0]->Product_Dimension }}" class="form-control" style="width:100%" placeholder="L x B x H">
                </div><br>
                <div class="col-md-4">
                    <label class="text-truncate  text-body ms-3 w-80 mb-0">Weight</label>
                    <input type="text" name="Weight" value="{{ $prod[0]->Weight }}" class="form-control" style="width:100%">
                </div><br>

                <div class="col-md-4">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Product on Sale/New</label>
                        <select type="sale" name="sale" value="{{ $prod[0]->sale }}" class="form-control" style="width:100%" >
                        <option value="Sale">Sale</option>
                        <option value="New">New</option>
                        </select>
                    </div><br>
                
                
                <!-- <div class="col-md-4 form-check">
                <input class="form-check-input" type="checkbox" value="" id="sale">
                <label class="form-check-label" for="flexCheckDefault"> Sale  </label>
               </div><br>
               <div class="col-md-4 form-check">
                <input class="form-check-input" type="checkbox" value="" id="New">
                <label class="form-check-label" for="flexCheckDefault"> New</label>
               </div><br> -->
                
                {{-- <div class="col-md-4">
                    <label class="text-truncate  text-body ms-3 w-80 mb-0">Product Size</label>
                        @foreach (App\Models\product::orderBy('id')->limit(1)->get() as $product )
                        <input type="text"  value="{{$prod[0]->Product_Size}}"  class="form-control" style="width:100%">
                        @endforeach
                </div><br> --}}
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <label class="text-truncate  text-body ms-3 w-80 mb-0">Quantity</label>
                    <input type="text" name="Quantity" value="{{ $prod[0]->Quantity }}" class="form-control" style="width:100%">
                </div><br>
                <div class="col-md-4">
                    <label class="text-truncate  text-body ms-3 w-80 mb-0">Price</label>
                    <input type="text" name="Price" value="{{ $prod[0]->Price }}" class="form-control" style="width:100%" placeholder="In $">
                </div><br>
                {{-- <div class="col-md-4">
                    <label class="text-truncate  text-body ms-3 w-80 mb-0">Stock Availability</label>
                    @foreach (App\Models\product::orderBy('id')->limit(1)->get() as $product )
                    <input type="text"  value="{{$prod[0]->stock_availability}}"  class="form-control" style="width:100%">
                    @endforeach
                </div><br> --}}
            </div>
            <div class="row mb-4">
              <div class="col-md-4">
              <button type="submit" class="btn btn-info btn-sm" style="background-color: #bf9f6c">Save</button>
              <button type="reset" class="btn btn-light btn-sm" name="submit">Return</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
