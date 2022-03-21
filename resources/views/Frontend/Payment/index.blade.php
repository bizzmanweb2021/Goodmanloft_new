@extends('Frontend.layouts.master')
@section('content')
<style>
    .card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center;
    }
    .card-product .img-wrap img {
    max-height: 100%;
    max-width: 100%;
    object-fit: cover;
    }
    .card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee;
    }
    .card-product .bottom-wrap {
    padding: 15px;
    border-top: 1px solid #eee;
    }
    .label-rating { margin-right:10px;
    color: #333;
    display: inline-block;
    vertical-align: middle;
    }
    .card-product .price-old {
    color: #999;
    }
    </style>

<div class="row">
    <div class="col-md-4">
    <div class="bottom-wrap">
    <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right order_now" data-amount="1280" data-id="3">Order Now</a>

    <!-- price-wrap.// -->
    </div>
    <!-- bottom-wrap.// -->
    </figure>
    </div>
    <!-- col // -->
    </div>
    <!-- row.// -->
    </div>
    <!--container.//-->
    <br><br><br>

@endsection
