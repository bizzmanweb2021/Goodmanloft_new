@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Products view</h6>
@endsection
@section('content')


<div class="col-md-12 mb-lg-0 mb-4">
    
        <div class="card-body p-3">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                        <tr>
                           
                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Name</th>
                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Image</th>
                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Size</th>
                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Description</th>
                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quantity</th>
                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Weight</th>
                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Product Dimension</th>
                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Stock Availability</th>
                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Shape</th>
                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Brand</th>
                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sale</th>
                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">New</th>
                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Discount</th>
                             
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Products as $item)
                        <tr style="text-align: center">
                            <td><a href="{{ route('admin.edit.product',$item["id"]) }}"><i class="fa fa-edit"></i></a></td>
                            <td><img src="{{ url('/' . $item["product_image"] )}}" width=80px; height=80px; /> </td>
                            <td>{{$item["product_name"]}}</td>
                            <td>{{$item["Product_Size"]}}</td>
                            <td>{{$item["Price"]}}</td>
                            <td>{{$item["Quantity"]}}</td>
                            <td>{{$item["sale"]}}</td>
                            <td>{{$item["Weight"]}}</td>
                            <td>{{ $item["Product_Dimension"] }}</td>
                            <td>{{$item["stock_availability"]}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
