@extends('Frontend.layouts.master')
@section('content')
<!-- Page Banner Section Start -->
{{-- <div class="page-banner-section section bg-image" data-bg="assets/images/inner-breadcum.png"> --}}
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-center">
                    <h2>Contact us</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li> Contact us</li>
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
        <!--Contact section start-->
        <div class="conact-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45">
            <div class="container sb-border pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">

                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="contact-information">
                            <h3>Contact Us</h3>
                            <ul>
                                <li>
                                    <span class="icon"><i class="fa fa-home"></i></span>
                                    <h4 class="text">Address</h4>
                                    <p>  1 Pemimpin Dr, #04-01/02, One Pemimpin,
                                        Singapore 576151
                                        </p>
                                </li>
                                <li>
                                    <span class="icon"><i class="fa fa-envelope-open-o"></i></span>
                                    <h4 class="text">Email</h4>
                                   <p><a href="mailto:hello@goodmansloft.com">hello@goodmansloft.com</a>

                                </p>
                                </li>
                                <li>
                                    <span class="icon"><i class="fa fa-phone"></i></span>
                                    <h4 class="text">Phone</h4>
                                    <p>Mobile: +65 96352229

                                        <br>
                                        </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="contact-form-wrap">
                            <h3 class="contact-title">Get In Touch</h3>
                            <form id="contact-form" action="" method="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-form-style mb-20">
                                            <input name="con_name" placeholder="Name*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-form-style mb-20">
                                            <input name="con_email" placeholder="Email*" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-form-style mb-20">
                                            <input name="subject" placeholder="Subject*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-form-style">
                                            <textarea name="con_message" placeholder="Type your message here.."></textarea>
                                            <button class="btn" type="submit"><span>Send message</span></button>
                                        </div>
                                    </div>
                                    <p>This Data Protection Notice (“Notice”) sets out the basis which Goodman’s Loft (“we”, “us”, or “our”) may collect, use, disclose or otherwise process personal data of our customers in accordance with the Personal Data Protection Act (“PDPA”). This Notice applies to personal data in our possession or under our control, including personal data in the possession of organisations which we have engaged to collect, use, disclose or process personal data for our purposes.</p>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Contact section end-->

                <!--Contact Map section start-->
                <div class="contact-map-section section">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.830933583342!2d103.8428151!3d1.3519089!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x94c27dc34f67fb35!2sGoodman&#39;s%20Loft!5e0!3m2!1sen!2sin!4v1644813627498!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <!--Contact Map section End-->


@endsection
