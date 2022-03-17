@extends('Frontend.layouts.master')
@section('content')
<div class="page-banner-section section bg-image" data-bg="assets/images/inner-breadcum.png">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h2>Faq</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li>Faq</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="faq-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 ">
    <div class="container sb-border pb-90 pb-lg-70 pb-md-60 pb-sm-50 pb-xs-40">
        <div class="row">
            <div class="col-md-12">
                <div class="faq-accordion">
                    <div id="accordion">
                        @foreach ($faq as $items )
                            <div class="card actives">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                    <a class="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>{{$items->Question}}</strong>
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <p>{!! $items->Answer !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <p><strong>Contact us at <a href="#"> loft@goodmaninterior.com</a>  to find out more.</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
