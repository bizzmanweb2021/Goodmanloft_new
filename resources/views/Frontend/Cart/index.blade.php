@extends('Frontend.layouts.master')
@section('content')
<style>
    .nice-select.open .list{
        height:200px;
        overflow: auto;
    }
</style>
<!-- Page Banner Section Start -->
{{-- <div class="page-banner-section section bg-image" data-bg="assets/images/inner-breadcum.png"> --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h2>Shopping Cart</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li>Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
<!-- Page Banner Section End -->
<div class="site-whatsapp">
    <a href="https://wa.me/6596352229" target="_blank"><img src="assets/images/wp-logo.png" alt=""></a>
  </div>
<div class="cart-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 " >
    <div class="cart-pattern" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Cart Table -->
                    <div class="cart-table table-responsive mb-30">
                        <table class="table" style="background-color: #fff;">
                            <thead>
                                <tr>
                                    <th class="pro-remove">Remove</th>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Unit Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = 0 @endphp
                                    @foreach($data as $detail)
                                        <?php $total += $detail['price'] * $detail['quantity'] ?>
                                            <tr>
                                                <td class="pro-remove"><a href="{{ route('cart.remove',$detail['id']) }}"><i class="fa fa-trash-o"></i></a></td>
                                                <td class="pro-thumbnail"><a href="#"><img src="{{ asset($detail['product_image']) }}" alt="Product"></a></td>
                                                <td class="pro-title"><a href="#">{{ $detail['product_name'] }}</a></td>
                                                <td class="pro-price"><span>${{ $detail['price'] }}</span></td>
                                                <td class="pro-quantity">
                                                    <div class="pro-qty">
                                                        <input type="text" data-id="{{ $detail['id']}}" class="update-cart" value="{{ $detail['quantity'] }}" min="1">
                                                    </div>
                                                </td>
                                                <td class="pro-subtotal"><span>${{ $detail['price'] * $detail['quantity'] }}</span></td>
                                            </tr>
                                    @endforeach
                                <?php>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                                <div class="col-12 mb-60">
                                    <h4 class="checkout-title">Cart Total</h4>
                                    <div class="checkout-cart-total">
                                        <h4>Product <span>Total</span></h4>
                                        @php $sub_total = 0 @endphp
                                        @foreach (App\Models\Cart::where("user_id",Auth::user()->id)->get() as $cart)
                                        <?php $sub_total += $cart->total ?>
                                        <ul>
                                            <!-- <li><img src="{{ $cart->product_image }}" style="width: 75px; height:100px;"></li> -->
                                            <li>{{ $cart->product_name }} <span>${{ $cart->total }}</span></li>
                                        </ul>
                                        @endforeach
                                        <p>Sub Total <span>${{ $sub_total }}</span></p>
                                        <p>Shipping
                                            <span class="badge badge-secondary" style="float: none; color:black;">
                                            <a data-bs-toggle="modal" data-bs-target="#myModal">?</a>
                                        </span><span  style="opacity: 0.8;">Calculated at next step</span></p>
                                        <p>Coupon Code<span>
                                            <input type="text" style="background-color: white; width:120px; height:40px;">
                                        </span></p>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                    <h1 class="modal-title">Shipping Policy</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                    <p>We ship direct from Singapore via Easyparcel for Singapore orders. International orders are currently not available. All orders shipped are trackable. You'll be able to track and manage your delivery by using the Shipping Confirmation email that we send as soon as your order begins its journey.

                                                    Based on your location, delivery times are:
                                                    
                                                    Singapore
                                                    
                                                    1.Delivers Next Business Day after order processing.
                                                    2.You’ll be asked to select a Delivery Window of either 9am to 5pm or 5pm to 10pm.
                                                    Please note that shipping and delivery charges are also based on size and weight of choice of product.
                                                    
                                                    Please take note that our delivery charge does not include unpacking of your items, assembly, and packaging removal. Most of our items do not require assembly, however if you need us to arrange any of these services do contact us so we can arrange it at a small additional cost.
                                                    
                                                    We offer free delivery for orders above SGD$250.

                                                    </p>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="place-order btn btn-sm btn-round">Next: Making Payment</button>

                        </div>
            </div>
            <div class="cart-summary ">
                <div class="cart-summary-wrap" style="padding: 20px; background-color: Transparent; font-family: 'Montserrat', sans-serif; font-size:18px;">
                    <p> Sub Total<span> ${{ $total }}</span></p>
                    <p style="font-size: 12px">(The sub total are not inclusive of any additional charges such as delivery)</p>
                </div>
                <div class="cart-summary-button" style="text-align: right;">
                    <a class="btn" onclick="window.location.href='/checkout'">Checkout</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!--Cart section end-->
@section('javascript')
    <script>
        $(".dec, .inc").click(function(){
            var quantity = $(this).parent().find('input').val();
            var cart_id = $(this).parent().find('input').attr('data-id');
            $.ajax({
            url:"{{ route('cart.update') }}",
            type: "POST",
            dataType: "json",
            data: {
                cart_id: cart_id,
                quantity: quantity,
                _token:"{{ csrf_token() }}",
            },
            success:function(data)
            {
                if(data.status == "Success"){
                    window.location.reload();
                }
            }
            })
        })
        $(document).ready(function(){
            var total = $("#sub_total").val();
            console.log(total);
        })
    </script>
@endsection
@endsection
