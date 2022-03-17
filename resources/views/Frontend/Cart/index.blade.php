@extends('Frontend.layouts.master')
@section('content')
<style>
    .nice-select.open .list{
        height:200px;
        overflow: auto;
    }
</style>
<!-- Page Banner Section Start -->
<div class="page-banner-section section bg-image" data-bg="assets/images/inner-breadcum.png">
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
</div>
<!-- Page Banner Section End -->
<div class="cart-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 " >
    <div class="cart-pattern" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Cart Table -->
                    <div class="cart-table table-responsive mb-30">
                        <table class="table" style="background-color: #fff;">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = 0 @endphp
                                    @foreach($data as $detail)
                                        <?php $total += $detail['price'] * $detail['quantity'] ?>
                                            <tr>
                                                <td class="pro-thumbnail"><a href="#"><img src="{{ asset($detail['product_image']) }}" alt="Product"></a></td>
                                                <td class="pro-title"><a href="#">{{ $detail['product_name'] }}</a></td>
                                                <td class="pro-price"><span>${{ $detail['price'] }}</span></td>
                                                <td class="pro-quantity">
                                                    <div class="pro-qty">
                                                        <input type="number" data-id="{{ $detail['id']}}" class="update-cart" value="{{ $detail['quantity'] }}" min="1">
                                                    </div>
                                                </td>
                                                <td class="pro-subtotal"><span>${{ $detail['price'] * $detail['quantity'] }}</span></td>
                                                <td class="pro-remove"><a href="{{ route('cart.remove',$detail['id']) }}"><i class="fa fa-trash-o"></i></a></td>
                                            </tr>
                                    @endforeach
                                <?php>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="cart-summary ">
                <div class="cart-summary-wrap" style="padding: 20px; background-color: Transparent; font-family: 'Montserrat', sans-serif; font-size:18px;">
                    <p> Sub Total<span> ${{ $total }}</span></p>
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
