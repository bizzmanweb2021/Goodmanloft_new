@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">SubCategory view</h6>
@endsection
@section('content')


<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-12">
                    <a class="btn bg-gradient-dark mb-0" href="{{route('admin.SubCategoryAdd')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add SubCategory</a>
                </div>
            </div>
        </div>
        <div class="card-body p-3">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">S.No</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">SubCategory Image</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">SubCategory Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Edit</th>

                    </tr>

                  </thead>
                    <tbody>
                      @foreach($subcategory as $key=> $item)
                      <tr>
                       <td>{{ $key+1 }}</td>
                        <td><img src="{{ url('/' . $item->SubCategory_image )}}" width=80px; height=80px; /> </td>
                        <td>{{$item->SubCategory_Name}}</td>
                        <td>{{$item->Category_Name}}</td>
                        <td><a href="{{ route('admin.edit.sub',$item->sub_id) }}"><i class="fa fa-edit"></i></a></td>

                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
