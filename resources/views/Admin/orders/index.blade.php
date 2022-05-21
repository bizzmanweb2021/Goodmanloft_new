@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Products view</h6>
@endsection
@section('content')

<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
        <div class="card-header pb-0 p-3">
            <div class="row mb-3">
                    <div class="col-md-3 mt-2 ">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">From Date</label>
                        <input type="date" class="form-control" id="dateFrom" name="dateFrom" />
                    </div>
                    <div class="col-md-3 mt-2">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">To Date</label>
                        <input type="date" class="form-control" id="dateTo" name="dateTo" />
                    </div>
                    @php
                        $order_status = App\Models\OrderStatus::get();
                    @endphp
                    <div class="col-md-3 mt-2">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Status</label>
                            <select name="" id="order_status" class="form-control">
                                <option value="">--Select--</option>
                                    @foreach ($order_status as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                    <option value="0">Self Pick</option>
                            </select>
                    </div>
                    <div class="col-md-3 mt-2">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Product Name</label>
                            <select name="" id="order_status" class="form-control">
                                <option value="">--Select--</option>
                                <option value="0">Paid</option>
                                <option value="1">Unpaid</option>
                            </select>
                    </div>
                    <div class="col-md-3 mt-2">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Customer Name</label>
                            <select name="" id="order_status" class="form-control">
                                <option value="">--Select--</option>
                                <option value="0">Paid</option>
                                <option value="1">Unpaid</option>
                            </select>
                    </div>
                    <div class="col-md-3 mt-2">
                        <label class="text-truncate  text-body ms-3 w-80 mb-0">Customer MobileNo.</label>
                            <select name="" id="order_status" class="form-control">
                                <option value="">--Select--</option>
                                <option value="0">Paid</option>
                                <option value="1">Unpaid</option>
                            </select>
                    </div>
            </div>
        </div>

        <div class="card-body p-3">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                    <tr>
                    <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">User ID</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Customer Name</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Price</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Quantity</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Total Amount</th>
                       <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Date</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($carts as $cart)
                   
                        <tr style="text-align: center">  
                            <td>{{ $cart->user_id }}</td>
                            <td>{{ $cart->product_name }}</td>
                           
                            
                            <td>{{ $cart->price }}</td>
                            <td>{{ $cart->quantity }}</td>
                            <td>{{ $cart->total }}</td>
                            <td>{{ $cart->created_at }}</td>
                            <td><a class="btn btn-soft-info  btn-icon btn-circle btn-sm" href="{{route('admin.orderDetails')}}"><i class="fa fa-eye"> &nbsp &nbsp </i></a></td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
