@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Stock view</h6>
@endsection
@section('content')


<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-12">
                    <a class="btn bg-gradient-dark mb-0" href="{{route('admin.stockAdd')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Stock</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3 text-right">
                <a class="btn btn-soft-info  btn-icon btn-circle btn-sm" href="{{route('admin.download-pdf1')}}"><i class="fa fa-file-pdf-o" style="font-size:35px;color:red"></i></a>
                <a class="btn btn-soft-info  btn-icon btn-circle btn-sm" href="{{route('admin.file-export1')}}"><i class="fa fa-file-excel-o fa_custom fa-4x" style="font-size:35px;color:green"></i></a>
</div>
</div>
        <div class="card-body p-3">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">S.No</th>
                    <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stock Image</th>
                      <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Name</th>
                      <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Price</th>
                      <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stock Available</th>
                      <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stock Input Date</th>
                      <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Edit</th>

                    </tr>

                  </thead>
                  <tbody>
                      @foreach($Stocks as $key=> $item)
                      <tr>
                      <td>{{ $key+1 }}</td>
                         <td><img src="{{ url('/' . $item->stock_image )}}" width=80px; height=80px; /></td>
                        <td>{{$item->product_name}}</td>
                        <td>{{$item->Price}}</td>
                        <td>{{$item->stock_available}}</td>
                        <td>{{$item->stock_input_date}}</td>
                        <td><a href="{{ route('admin.edit.stock',$item->id) }}"><i class="fa fa-edit"></i></a></td>

                        </tr>
                      @endforeach

                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
