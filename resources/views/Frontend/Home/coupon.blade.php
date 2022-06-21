@extends('Frontend.layouts.master_home')
@section('content')

<div class="newsletter-popup-area" id="newsletter-popup-area" style="height:50px; width:40px;">
        <div class="newsletter-popup-content-wrapper">
            <div class="newsletter-popup-content text-center">
                <a href="{{ route('user.index') }}" class="close-newsletter-popup" id="close-newsletter-popup">Close</a>
                
               <div class="row align-items-center">
                   <div class="col-md-4">
                       <img src="assets/images/giftbox.jpeg" alt="" class="img-fluid">
                   </div>
                   <div class="col-md-5">
                       <div class="sale-text">
                        <h3>SUMMER SALE</h3>
                        <span>UPTO 50% OFF</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, tenetur iure animi quos ab tempore excepturi minus nisi. Quis totam, </p>
                        <button class="btn btn-primary">SHOP NOW</button>
                       </div>   
                       
                   </div>
               </div>
              
               </div>
        </div>
    </div>
    @endsection