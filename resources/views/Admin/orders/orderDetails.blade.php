@extends('Admin.layouts.main')
@section('content')
    <style>
        body {
            font-size: 14px;
            font-family: Poppins, Helvetica, sans-serif;
            font-weight: 400;
            line-height: 1.5;
            color: #1b1b28;
        }

        .table td,
        .table th {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

    </style>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                {{-- start --}}
                <div class="card mt-2">
                    <div class="card-header">
                        <h1 class="h3 fs-16 mb-0">Order Details</h1>
                    </div>

                   

                    {{-- card body --}}
                    <div class="card-body">
                        <div class="row gutters-5">
                           

                              
                            <div class="col-md-4 ml-auto">
                                <label for="update_delivery_point_status">Payment Status</label>
                                <select class="form-control aiz-selectpicker" data-minimum-results-for-search="Infinity"
                                    id="update_payment_status">
                                    <option value="0" >Unpaid</option>
                                    <option value="1" >Paid</option>
                                </select>
                            </div>
                           
                                <div class="col-md-4 ml-auto">
                                    <label for="update_delivery_point_status">Order Status</label>
                                    <select class="form-control aiz-selectpicker" data-minimum-results-for-search="Infinity"
                                        id="update_self_pick_order_status">
                                        <option value="">--Select--</option>
                                        <option value="4">
                                            Pending Collection</option>
                                        <option value="5">
                                            Complete</option>
                                        <option value="6" >
                                            Cancelled</option>
                                    </select>
                                </div>
                               

                                <div class="col-md-4 ml-auto">
                                    <label for="update_delivery_point_status">Pick Up Point</label>
                                    <select class="form-control aiz-selectpicker" data-minimum-results-for-search="Infinity"
                                        id="update_pick_point_status">
                                        <option value="">--Select--</option>
                                       
                                    </select>
                                </div>
                            
                        </div>&nbsp;&nbsp;

                        {{-- address --}}
                        
                        <div class="row gutters-5">
                            <div class="col text-left text-md-left">
                            @foreach (App\Models\Shipping_address::orderBy('id','desc')->limit(1)->get() as $shipping)
                                         
                               <ul style="list-style:none"> 
                                   <li>
                                   <strong class="text-main">Ship To:</strong>
                                    </li>
                                    <li>{{ $shipping->address_ship }}</li>
                                    <li>{{ $shipping->city_ship }}</li>
                                    <li>{{ $shipping->state_ship }}</li>
                                    <li>{{ $shipping->zip_ship }}</li>

                             </ul>
                                @endforeach 
                            </div>
                            <div class="col text-left text-md-left">
                            @foreach (App\Models\Billing_address::orderBy('id','desc')->limit(1)->get() as $billing)
                             
                            <ul style="list-style:none"> 
                                   <li>
                                   <strong class="text-main">Bill To:</strong>
                                    </li>
                                    <li>{{ $billing->full_name }}</li>
                                    <li>{{ $billing->email }}</li>
                                    <li>{{ $billing->phone }}</li>
                                    <li>{{ $billing->address }}</li>
                                    <li>{{ $billing->city }}</li>
                                    <li>{{ $billing->state }}</li>
                                    <li>{{ $billing->zip }}</li>
                             </ul>
                            @endforeach 

                            </div>
                            <div class="col-md-5 text-left text-md-left">
                           
                             
                            <ul style="list-style:none"> 
                            &nbsp;  
                                    <li><strong class="text-main text-bold">Order Status:Completed</strong></li>&nbsp;
                                    <li><strong class="text-main text-bold">Payment Status:Paid</strong></li>&nbsp;
                                    <li><strong class="text-main text-bold">Order Date:2022-18-05</strong></li>&nbsp;
                                    <li><strong class="text-main text-bold">Payment Status:Approved</strong></li>&nbsp;
                                    <li><strong class="text-main text-bold">Payment Method:Paypal</strong></li> &nbsp;                             
                             </ul>
                           

                            </div>
                        </div>
                        {{-- end address --}}
                        <hr class="new-section-sm bord-no">
                        {{-- order list --}}
                        <div class="row">
                            <div class="col-lg-12 table-responsive">
                                <table class="table table-bordered aiz-table invoice-summary">
                                    <thead>
                                        <tr class="bg-trans-dark">
                                            <th width="10%">Product_Image</th>
                                            <th class="text-uppercase">Product Name</th>
                                            <th data-breakpoints="lg" class="text-uppercase">
                                                Quantity</th>
                                            <th data-breakpoints="lg" class="min-col text-center text-uppercase">
                                                Price</th>
                                            <th data-breakpoints="lg" class="min-col text-right text-uppercase">
                                                Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach (App\Models\Cart::where("user_id",Auth::user()->id)->get() as $cart)
                                            <tr>
                                                
                                                <td><img src="{{ $cart->product_image }}">
                                                </td>
                                                <td>
                                                {{ $cart->product_name }}
                                                </td>
                                                <td>
                                                {{ $cart->quantity }}
                                                </td>
                                                <td>
                                                    {{ $cart->price }}
                                                </td>
                                               
                                                <td>
                                                ${{ $cart->total }}
                                                </td>
                                               
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- end order list --}}

                        {{-- footer --}}
                       
                    </div>
                    {{-- end --}}

                </div>
            </div>
        </section>
    </div>



   

@endsection
