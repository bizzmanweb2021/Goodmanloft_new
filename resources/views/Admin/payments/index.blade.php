@extends('Admin.layouts.main')
@section('title')
<h6 class="font-weight-bolder mb-0">Payment view</h6>
@endsection
@section('content')


<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-md-2">
                    <label class="text-truncate  text-body ms-3 w-80 mb-0">Payments</label>

                        <select name="" id="payment_option" class="form-control">
                                    <option value="credit_card">Credit Card</option>
                                    <option value="Debit_Card">Debit Card</option>

                                    <option value="0">Self Pick</option>
                        </select>
                </div>
            </div>
        </div>
        <div class="card-body p-3">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">User Name</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pay</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                    </tr>
                  </thead>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
