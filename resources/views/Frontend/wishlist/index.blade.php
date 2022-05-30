@extends('Frontend.layouts.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h2>Wishlist</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li>Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Section End -->
 <!--Wishlist section start-->
 <div class="wishlist-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 mb-5 pb-5">
    <div class="container  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
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
                                <th class="pro-stock">Stock Status</th>
                                <th class="pro-addtocart">Add to cart</th>
                                <th class="pro-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $detail)
                            <tr>
                                <td class="pro-thumbnail">
                                    <img src="{{ url('/' . $detail->product_image)}}" width=80px; height=80px;  alt="Product"></td>
                                <td class="pro-title">{{ $detail->product_name }}</td>
                                <td class="pro-price"><span>${{ $detail->Price }}</span></td>
                                <td class="pro-stock"><span class="in-stock">in stock</span></td>
                                <td class="pro-addtocart"><a href="{{ route('add.wish',$detail->id) }}" class="btn" >Add to cart</a></td>
                                <td class="pro-remove"><a href="{{ route('wish.remove', $detail->id) }}"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Wishlist section end-->


@endsection

