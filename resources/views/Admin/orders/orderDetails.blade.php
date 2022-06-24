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
                                    <option value="">--Select--</option>
                                    <option value="Approved" >Approved</option>
                                    <option value="Pending" >Pending</option>
                                </select>
                            </div>
                           
                                <div class="col-md-4 ml-auto">
                                    <label for="update_delivery_point_status">Order Status</label>
                                    <select class="form-control aiz-selectpicker" data-minimum-results-for-search="Infinity"
                                        id="update_self_pick_order_status">
                                        <option value="">--Select--</option>
                                        <option value="Pending Collection">
                                            Pending Collection</option>
                                        <option value="Complete">
                                            Complete</option>
                                        <option value="Cancelled" >
                                            Cancelled</option>
                                    </select>
                                </div>
                               

                                <div class="col-md-4 ml-auto">
                                    <label for="update_delivery_point_status">Pick Up Point</label>
                                    <select class="form-control aiz-selectpicker" data-minimum-results-for-search="Infinity"
                                        id="update_pick_point_status">
                                        <option value="">--Select--</option>
                                        <option value="">Singapore</option>
                                       
                                    </select>
                                </div>
                            
                        </div>&nbsp;&nbsp;

                        {{-- address --}}
                        
                        <div class="row gutters-5">
                            <div class="col text-left text-md-left">
                            @foreach (App\Models\Shipping_address::where('user_id',$order->user_id)->orderBy('id','desc')->limit(1)->get() as $shipping)
                                         
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
                            @foreach (App\Models\Billing_address::where('user_id',$order->user_id)->orderBy('id','desc')->limit(1)->get() as $billing)
                             
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
                            <div class="col-md-4 ml-auto">
                                <table>
                                @foreach (App\Models\Order::where("user_id",Auth::user()->id)->where('id',$order->id)->orderBy('id')->limit(1)->get() as $orders)
                                    <tbody>
                                        <tr>
                                            <td class="text-main text-bold">Order #:</td>
                                            <td class="text-right text-info text-bold">{{ $orders->transaction_id }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-main text-bold">Order Status:</td>
                                            <td class="text-right"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-main text-bold">Payment status:</td>
                                            <td class="text-right">{{ $orders->payment_status }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-main text-bold">Order Date:</td>
                                            <td class="text-right">
                                                {{ date('d-m-Y h:i A', strtotime($orders->created_at)) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-main text-bold">
                                                Total amount:
                                            </td>
                                            <td class="text-right">
                                                ${{ $orders->order_total }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-main text-bold">Payment method:</td>
                                            <td class="text-right">
                                            {{ $orders->payment_method }}
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach 
                                </table>
                            </div>
                        </div>
                            <!-- <div class="col-md-5 text-left text-md-left">
                            @foreach (App\Models\Order::orderBy('id','desc')->limit(1)->get() as $orders)
                             
                            <ul style="list-style:none"> 
                            &nbsp;  
                                    <li><strong class="text-main text-bold">Order Status:</strong></li>&nbsp;
                                    <li><strong class="text-main text-bold">Transaction Status:</strong>{{ $orders->transaction_id }}</li>&nbsp;
                                    <li><strong class="text-main text-bold">Order Date:</strong>{{ $orders->created_at }}</li>&nbsp;
                                    <li><strong class="text-main text-bold">Payment Status:</strong>{{ $orders->payment_status }}</li>&nbsp;
                                    <li><strong class="text-main text-bold">Payment Method:</strong>{{ $orders->payment_method }}</li> &nbsp;                             
                             </ul>
                           
                             @endforeach 
                            </div> -->
                        </div>
                        {{-- end address --}}
                        <hr class="new-section-sm bord-no">
                        {{-- order list --}}
                        <div class="row">
                            <div class="col-lg-12 table-responsive">
                                <table class="table table-bordered aiz-table invoice-summary">
                                    <thead>
                                        <tr class="bg-trans-dark">
                                        <th width="3%">#</th>
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
                                    @php $total=0; @endphp
                                    @foreach (App\Models\OrderItem::where("user_id",Auth::user()->id)->where('order_id',$order->id)->get() as $key=>$cart)
                                    
                                            <tr>
                                            <td>
                                                {{ $key+1 }}
                                                @php
                                                $Product = App\Models\Product::where('id',$cart->product_id)->first();
                                                $total += $cart->quantity*$cart->price;
                                                @endphp
                                                </td>
                                                <td><img src="{{ url('/' . $Product["product_image"] )}}" width=100px; height=80px; />
                                                </td>
                                                <td>
                                                {{ $Product->product_name }}
                                                </td>
                                                <td>
                                                {{ $cart->quantity }}
                                                </td>
                                                <td>
                                                {{ $cart->price }}
                                                </td>         
                                                <td>
                                                ${{ $cart->quantity*$cart->price }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- end order list --}}
                        {{-- footer --}}
                        
                        <div class="row">
                                                <div class="col-xl-6 col-md-6">
                                              </div>
                                                <div class="col-xl-6 col-md-6 ml-auto mr-0">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th>Subtotal</th>
                                                                <td class="text-right">
                                                                    <span
                                                                        class="fw-600">${{ $total }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Shipping</th>
                                                                <td class="text-right">
                                                                    <span
                                                                        class="font-italic">${{ 0.00 }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Coupon Discount</th>
                                                                <td class="text-right">
                                                                    <span
                                                                        class="font-italic">${{ 0.00 }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th><span class="fw-600">Total</span></th>
                                                                <td class="text-right">
                                                                    <strong><span>${{ $total }}</span></strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                        
                            {{-- end footer --}}

                            <div class="text-right no-print">
                                <a href="#" type="button"
                                    class="btn btn-icon btn-light"><i class="las la-print"></i></a>
                            </div>
                        </div>
                        {{-- end card body --}}
                    </div>
                    {{-- end --}}

                
            </div>
        </section>
    </div>



   

@endsection
