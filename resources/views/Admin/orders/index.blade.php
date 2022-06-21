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
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3 text-right">
                <a class="btn btn-soft-info  btn-icon btn-circle btn-sm" href="{{route('admin.download-pdf2')}}"><i class="fa fa-file-pdf-o" style="font-size:35px;color:red"></i></a>
                <a class="btn btn-soft-info  btn-icon btn-circle btn-sm" href="{{route('admin.file-export2')}}"><i class="fa fa-file-excel-o fa_custom fa-4x" style="font-size:35px;color:green"></i></a>
</div>
</div>
        <div class="card-body p-3">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                    <tr>
                    <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">S.No</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Transaction_ID</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Customer Name</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Shipping Charge</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Coupon Discount Amount</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Total Amount</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Payment Status</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Date</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                            <?php 
								foreach($result as $key=> $data)
								{
								?>
								<tr style="text-align: center">
                                <td>{{ $key+1 }}</td>
								<td><?php echo $data->transaction_id;?></td>
								<td><?php echo $data->full_name;?></td>
								<td><?php echo $data->shipping_charge;?></td>
								<td><?php echo $data->discount_amount;?></td>
								<td><?php echo $data->order_total;?></td>
								<td><?php echo $data->payment_status;?></td>
                                <td><?php echo $data->payment_method;?></td>
								<td><?php echo $data->date;?></td>
                                <td><a rel="id" href="{{url('admin/orderDetails/'.$data->id)}}"><i class="fa fa-eye"></i></a></td>
                           
                            
                        </tr>
                        <?php
						}
						?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>
<div id="order_list_loder" style="display: none">
        @include('admin.loder.index')
    </div>

@endsection
