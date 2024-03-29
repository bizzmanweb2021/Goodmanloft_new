@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Coupon view</h6>
@endsection
@section('content')


<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-12">
                    <a class="btn bg-gradient-dark mb-0" href="{{route('admin.CouponAdd')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Coupon</a>
                </div>
            </div>
        </div>
        <div class="card-body p-3">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7 ps-2">S.No </th>
                    <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Coupon Image</th>
                      <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Coupon Name </th>
                      <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Coupon Code</th>
                      <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Minimum Limit</th>
                      <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                    </tr>

                  </thead>
                    <tbody>
                    @foreach($cop as $key=>$item)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td><img src="{{ url('/' . $item["Banner"] )}}" width=80px; height=80px; /> </td>
                        <td>{{$item["coupon_name"]}}</td>
                        <td>{{$item["coupon_code"]}}</td>
                        <td>{{$item["minimum_limit"]}}</td>
                        <td><a onclick="return confirm('Are you sure want to delete?')" href="{{route('admin.Coupon-Delete',$item->id)}}"><i class="fas fa-trash-alt"></i></a></td>             

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
