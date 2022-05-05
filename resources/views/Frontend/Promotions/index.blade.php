@extends('Frontend.layouts.master')
@section('content')
<div class="page-banner-section section bg-image">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h2>Promotions</h2>
                    <img src="assets/images/promotional-banner.jpg" alt=""  >
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- Shop Section Start -->
 <div class="site-whatsapp">
    <a href="https://wa.me/6596352229" target="_blank"><img src="assets/images/wp-logo.png" alt=""></a>
  </div>
{{-- <div class="shop-section section" style="background-image: url(assets/images/shop-pattern.jpg); background-size: contain;"> --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="shop-area pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
                    {{-- <div class="row">
                        <div class="col-12">
                            <!-- Grid & List View Start -->
                            <div class="shop-topbar-wrapper d-flex justify-content-between align-items-center">
                                <div class="grid-list-option d-flex">
                                    <ul class="nav">
                                        <li><a class="active show" data-bs-toggle="tab" href="#grid"><i class="fa fa-th"></i></a></li>
                                    </ul>
                                    <p>Showing 1–9 of 41 results</p>
                                    </div>
                            </div>
                            <!-- Grid & List View End -->
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-lg-3 order-lg-1 order-2">
                            <div class="common-sidebar-widget">
                                <h3 class="sidebar-title">Filter by</h3>
                                <div class="row">
                                    <div class="col-md-5">
                                        <h4>Price</h4>
                                    </div>
                                    <div class="sidebar-price">
                                        <div id="price-range" class="mb-20"></div>
                                        <input type="text" id="price-amount" class="price-amount" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="common-sidebar-widget">
                                <div class="row">
                                    <div class="col-md-5">
                                        <h4 style="margin-top:10px;">Popularity</h4>
                                    </div>
                                    <div class="col-md-7">
                                        <select name="price" id="popularity">
                                            <option value="volvo">Lowest To Highest</option>
                                            <option value="saab">Highest To Lowest</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 order-lg-2 order-1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="shop-product">
                                        <div id="myTabContent-2" class="tab-content">
                                            <div id="grid" class="tab-pane fade active show">
                                                <div class="product-grid-view">
                                                    <div class="row" id="product_range">
                                                        {{-- @if(count($products) > 0) --}}
                                                        @foreach ($product as $products )

                                                        @if($products->sale == 'Sale')

                                                       
                                                        <div class="col-lg-4 col-md-6 col-sm-6" >
                                                            <a href="#">
                                                                <div class="single-grid-product mb-30">
                                                                    <div class="product-image">
                                                                        <div class="product-label">
                                                                            <span class="sale">Discount</span>
                                                                            <span class="new">Sale</span>
                                                                        </div>
                                                                        <a href="{{ route('productShow',$products->id) }}">
                                                                            <img src="{{ asset($products->product_image) }}" class="img-fluid" alt="">
                                                                        </a>
                                                                        <div class="product-action d-flex justify-content-between">
                                                                            <a class="product-btn" href="{{ route('add.wish',$products->id) }}">Add to Cart</a>
                                                                            <ul class="d-flex">
                                                                                <li><a href="{{ route('wishlistShow',$products['id']) }}"><i class="ion-android-favorite-outline"></i></a></li>
                                                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-content">
                                                                        <h3 class="title"> <a href="{{ route('productShow',$products['id']) }}" tabindex="0">{{($products->product_name) }}</a></h3>
                                                                        <p class="product-price"><span class="discounted-price">${{ $products->Price }}</span> <span class="main-price discounted">${{ $products->Price }}</span></p>
                                                                        <p class="text-success" style="color:#2ebe2c">{{ $products->stock_availability }}</p>
                                                                    </div>
                                                                </div>
                                                            </a>

                                                        </div>
                                                        @endif 

                                                        @endforeach
                                                                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row mb-30 mb-sm-40 mb-xs-30">
                                <div class="col">
                                    <ul class="page-pagination">
                                        <li class="active"><a href="#">01</a></li>
                                        <li><a href="#">02</a></li>
                                        <li><a href="#">03</a></li>
                                        <li><a href="#">04</a></li>
                                        <li><a href="#">05</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Shop Section End -->
@section('javascript')
<script>
    $('#price-range').slider({
    range: true,
    min: 0,
    max: 1000,
    values: [ 0, 900 ],
    slide: function( event, ui )
    {
        $('#price-amount').val( '$' + ui.values[ 0 ] + ' - $' + ui.values[ 1 ] );
        var fromRange = ui.values[0];
        var toRange = ui.values[1];
        $.ajax({
                url : "{{ route('get.price') }}",
                type : 'GET',
                data :{
                    fromrange: +fromRange,
                    torange: +toRange
                } ,
                dataType: 'json',
                success:function(data){
                   var len = data.length;
                   $('#product_range').empty();
                   console.log(data);
                   var url = "{{ asset('') }}"
                   for (let index = 0; index < len; index++) {
                    //    const element = array[index];
                    var image = data[index]['product_image'];
                    var product_link = "{{ route('productShow',':id') }}";
                    var product_add = "{{ route('add.wish',':id') }}"
                    product_link = product_link.replace(':id',data[index]['id']);
                    product_add = product_add.replace(':id',data[index]['id']);

                    $('#product_range').append(`<div class="col-lg-4 col-md-6 col-sm-6" >
                                                            <a href="#">
                                                                <div class="single-grid-product mb-30">
                                                                    <div class="product-image">
                                                                        <div class="product-label">
                                                                            <span class="sale">Sale</span>
                                                                            <span class="new">New</span>
                                                                        </div>
                                                                        <a href="${product_link}">
                                                                            <img src="${url+image}" class="img-fluid" alt="">
                                                                        </a>
                                                                        <div class="product-action d-flex justify-content-between">
                                                                            <a class="product-btn" href="${product_add}">Add to Cart</a>
                                                                            <ul class="d-flex">
                                                                                <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-content">
                                                                        <h3 class="title"> <a href="${product_link}" tabindex="0">${data[index]['product_name']}</a></h3>
                                                                        <p class="product-price"><span class="discounted-price">$ ${data[index]['Price']}</span> <span class="main-price discounted">${data[index]['Price']}</span></p>
                                                                        <p class="text-success" style="color:#2ebe2c"> ${data[index]['stock_availability']}</p>
                                                                    </div>
                                                                </div>
                                                            </a>

                                                        </div>`);

                   }

                }
            });
    }
    });
        // $('#price-range').change(function(){
        //     console.log($(this).val());
        //     // $('#product_range').empty();

        // });



</script>
@endsection
@endsection
