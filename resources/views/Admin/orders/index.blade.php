@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Orders view</h6>
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
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Order ID</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Customer Name</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Total Amount</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Discount Amount</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Shipping Charge</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Total</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Payment</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Date</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Action</th>


                    </tr>
                  </thead>

                </table>
            </div>
        </div>
        <div id="order_delete-modal" class="modal fade">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title h6">Delete Confirmation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="mt-1">Are you sure to delete this?</p>
                    <button type="button" class="btn btn-link mt-2" data-dismiss="modal">Cancel</button>
                    <a href="" id="order_delete-link" class="btn btn-primary mt-2">Delete</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection
