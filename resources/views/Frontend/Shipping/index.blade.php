@extends('Frontend.layouts.master')
@section('content')
<head>

</head>
<!-- Page Banner Section Start -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h2>Shipping Information</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li>  Shipping Information</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
<!-- Page Banner Section End -->
<!--Contact section start-->
<div class="conact-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45">
    <div class="container sb-border pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">

     <div class="shipping-info">
         <div class="row">
             <div class="col-md-5">
                 <div class="row">
                     <div class="col-md-6">
                         <h4>Contact</h4>
                     </div>
                     <div class="col-md-6">
                         @foreach (App\Models\Billing_address::orderBy('id','desc')->limit(1)->get() as $bill )
                         <p>{{ $bill->email }}/{{ $bill->phone }}</p>
                         @endforeach

                     </div>
                 </div>
             </div>
             <div class="col-md-7">
                 <div class="shipping-add-change">
                    <a href="{{ route('checkout') }}">Change</a>
                 </div>
             </div>
         </div>
         <hr>
        <div class="row">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Ship to</h4>
                    </div>
                    <div class="col-md-6">
                        @foreach (App\Models\Shipping_address::orderBy('id','desc')->limit(1)->get() as $ship)
                        <p>{{ $ship->full_name_ship }},{{ $ship->address_ship }},{{ $ship->city_ship }},{{ $ship->state_ship }},{{ $ship->zip_ship }}</p>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="shipping-add-change">
                   <a data-bs-toggle="modal" data-bs-target="#myModal">Change</a>
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Shipping Address</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <form action="{{ route('update.shipping') }}" method="POST" id="ship2">
                                    @csrf
                                    <div class="modal-body">
                                        @foreach (App\Models\Shipping_address::orderBy('id','desc')->limit(1)->get() as $ship)
                                        <input type="hidden" id="ship1" name="ship1" value="{{ $ship->id }}">
                                        <div class="row">
                                            <div class="col-md-12 col-12 mb-20">
                                                <label style="float: left">Full Name*</label>
                                                <input type="text" class="form-control" name="full_name_ship" value="{{ $ship->full_name_ship }}" readonly>
                                            </div>
                                            <div class="col-md-12 col-12 mb-20">
                                                <label style="float: left">Email Address*</label>
                                                <input type="email" class="form-control" name="email_ship" value="{{ $ship->email_ship }}" readonly>
                                            </div>
                                            <div class="col-md-12 col-12 mb-20">
                                                <label style="float: left">Phone no*</label>
                                                <input type="text" class="form-control" name="phone_ship" value="{{ $ship->phone_ship }}" readonly>
                                            </div>
                                            <div class="col-md-12 col-12 mb-20">
                                                <label style="float: left">Country*</label>
                                                <select id="country_ship" name="country_ship" class="form-control w-100" >
                                                    <option value="" >Singapore</option>
                                                    @foreach (App\Models\Country::all() as $Country)
                                                        <option {{ $Country->id == $ship->country_ship ? 'selected': ''}} value="{{$Country->id}}">{{$Country->name}}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12 mb-20">
                                                <label style="float: left">Address*</label>
                                                <input type="text" class="form-control" name="address_ship" value="{{ $ship->address_ship }}">
                                            </div>
                                            <div class="col-md-12 col-12 mb-20">
                                                <label style="float: left">City*</label>
                                                <input type="text" class="form-control" name="city_ship" value="{{ $ship->city_ship }}">
                                            </div>
                                            <div class="col-md-12 col-12 mb-20">
                                                <label style="float: left">State*</label>
                                                <input type="text" class="form-control" name="state_ship" value="{{ $ship->state_ship }}"">
                                            </div>
                                            <div class="col-md-12 col-12 mb-20">
                                                <label style="float: left">Zip Code*</label>
                                                <input type="text" class="form-control" name="zip_ship" value="{{ $ship->zip_ship }}">
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
             <div class="col-md-10">
                 <div class="row">
                     <div class="col-md-6">
                         <h4>Shipping Method</h4>
                     </div>
                     <div class="col-md-6">
                         
                     </div>
                 </div>
             </div>
             <div class="col-md-2">
                 <div class="shipping-add-change">
                 <select id="shipping_method" name="shipping_method" class="shipping_method" width=200 style="width: 100px; color:black;">
                            <option value='Select Shipping' selected>Select Shipping</option>
                            <option value='Local Shipping'>Local Shipping</option>
                            <option value='Express Local Shipping'>Express Local Shipping </option>
                            <option value='selfCollection'>Self Collection</option>
                            
                 </select>
                 </div>
             </div>
         </div>
        
    </div>&nbsp;&nbsp;&nbsp;
    
   
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <!-- Cart Total -->
                <div class="col-12 mb-60 mt-5">
                    <h3 style="margin-top:30px;">Cart Total</h3>
                    <div class="checkout-cart-total">
                        <h4>Product <span>Total</span></h4>
                        @php $sub_total = 0 @endphp
                                        @foreach (App\Models\Cart::where("user_id",Auth::user()->id)->get() as $cart)
                                        <?php $sub_total += $cart->total ?>
                                        <ul>
                                            <!-- <li><img src="{{ $cart->product_image }}" style="width: 75px; height:100px;"></li> -->
                                            <li>
                                            <div class="row">
                                                    <div class="col-md-10">{{ $cart->product_name }}</div>
                                                    <div class="col-md-2"> <span>${{ $cart->total }}.00</span></div>
                                        </div></li>
                                        </ul>
                                        @endforeach
                                        @php
                                            $shipping_amount = 0;
                                            $charges = DB::table('shipping_charges')->where('country_id','200');
                                            if($charges->count() > 0){
                                                $charge = $charges->first();
                                                if(250 > $sub_total){
													$shipping_amount = $charge->delivery_amount;
												}
                                            }
              
                                            $coupon_amount = 0;
											$coupon_code = '';
                                            $apply_coupon = DB::table('apply_coupon')->where("user_id",Auth::user()->id)->orderBy('id','DESC');
                                            if($apply_coupon->count() > 0){
                                                $coupon_id = $apply_coupon->first()->coupon_id;

                                                $coupon = DB::table('coupons')->where("id",$coupon_id);
                                                if($coupon->count() > 0){
                                                    $coupon = $coupon->first();
                                                    
													$coupon_code = $coupon->coupon_code;
                                                    $coupon_amount = $coupon->discount_amount;
                                                    
                                                }
                                            }

                                        @endphp
                                        <p>Sub Total <span>${{ $sub_total }}.00</span></p>
                                        <p>Shipping
                                            <span class="badge badge-secondary" style="float: none; color:black;">
                                            <a data-bs-toggle="modal" data-bs-target="#myModal">?</a>
                                        </span><span  style="opacity: 0.8;">{{ $shipping_amount }}.00</span></p>
                                        <p>Discount Amount<span>
											<input type="hidden" id="coupon_code" value="{{ $coupon_code}}">
											<input type="hidden" id="shipping_charge" value="{{ $shipping_amount}}">
                                            <input type="hidden" id="coupon_amount" value="{{ $coupon_amount }}">
                                            <span type="text">{{ $coupon_amount}}.00</span>
                                            <!-- <input type="text" id="coupon_amount" value="{{ $coupon_amount}}" style="background-color: white; width:120px; height:40px;"> -->
                                        </span></p>
                                        
                                        <p >Total <span class="tot">$
                                        @if(250 > $sub_total)
                                            {{ $sub_total = $sub_total + $shipping_amount - $coupon_amount}}.00
                                        @else
                                            {{ $sub_total = $sub_total - $coupon_amount }}.00
                                        @endif
                                        </span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                 <div class="col-12 mb-60 mt-5">
                    <h3 style="margin-top:30px;">Payment Method</h3>
                    <div class="checkout-payment-method">
                        <div class="single">
                            <input type="radio" id="payment_cash" name="payment-method" value="cash">
                            <label for="payment_cash">Google Pay</label>
                           </div>
                        <div class="single">
                            <input type="radio" id="payment_paypal" name="payment-method" value="paypal">
                            <label for="payment_paypal">Paypal</label>
                          </div>
                        <div class="single">
                            <input type="radio" id="payment_cash" name="payment-method" value="cash">
                            <label for="payment_cash">Cash on Delivery</label>
                               </div>
                    </div>
                </div> 
                <div id="paypal-button-container"></div>
                
               
                <div id="container"></div>

            </div>
        </div>
    </div><br>
    <!-- <div class="shipping-btn ">
        <a href="{{ route('confirm.payment') }}" data-amount="1280" data-id="3" class="btn order_now"><span>Continue To Payment</span></a> &nbsp;
        <a href="{{ route('checkout') }}"data-amount="1280" data-id="3" class="btn order_now"><span>Return to information</span></a>
    </div> -->
    </div>
</div>
<!--Contact section end-->

@endsection



@section('javascript')
<script type="text/javascript">
    //alert('hello');
    jQuery('#gpay').show();
    //jQuery('.gpay').show();

    $('body').on('change','.shipping_method',function(){

        if($(this).val()=='selfCollection'){
            alert('We will contact you within 3-Working Days');
        }
        

    });
    

</script>  
<script async
  src="https://pay.google.com/gp/p/js/pay.js"
  onload="onGooglePayLoaded()"></script>  

<script src="https://www.paypal.com/sdk/js?client-id=Adizxf9OQ6bntDa6O2iLB9_9hWyX-5W-rkMcqDZ6ieQ4bWtv51gdIFopTgG7ZrENQrDoDmAAkT6BuW1n&currency=SGD"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    paypal.Buttons({
      // Sets up the transaction when a payment button is clicked
      createOrder: (data, actions) => {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '{{ $sub_total }}' // Can also reference a variable or function
            }
          }]
        });
      },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
            return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            //alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
//alert(orderData.purchase_units[0]['.amount'].currency_code);
console.log(orderData.purchase_units);
                console.log(orderData.purchase_units[0].shipping.address.address_line_1);


                var transaction_id = orderData.id;
                var payment_status = orderData.status;
                var currency_code = orderData.purchase_units[0]['amount'].currency_code;
                var value = orderData.purchase_units[0]['amount'].value;

                var given_name = orderData.payer.name.given_name;
                var surname = orderData.payer.name.surname;
                var email_address = orderData.payer.email_address;

                var address_line_1 = orderData.purchase_units[0].shipping.address.address_line_1;
                var address_line_2 = orderData.purchase_units[0].shipping.address.address_line_2;
                var postal_code = orderData.purchase_units[0].shipping.address.postal_code;
                var country_code = orderData.purchase_units[0].shipping.address.country_code;
            


               //var user_id = $('user_id').val();
              //    var user_email = $('user_email').val();
                 var coupon_code = $('#coupon_code').val();
				 var coupon_amount = $('#coupon_amount').val();
				 var shipping_charge = $('#shipping_charge').val();
            //    var payment_method = $('payment_method').val();
            //    var order_total = $('order_total').val();
            //    var currency = $('currency').val();
              // var payment_status = $('payment_status').val();


            $.ajax(
            {
                method: "POST",
                url: "/place-order",
                data:
                {
                    "_token": "{{ csrf_token() }}",
                    "transaction_id" : transaction_id,
                    "payment_status" :payment_status,
                    "coupon_code" : coupon_code,
					"coupon_amount" : coupon_amount,
					"shipping_charge" : shipping_charge,
                    "payment_method" : 'Paid by Paypal',
                    "order_total" : value,
                    //amount : 'amount',
                    "currency" : currency_code,
                    "given_name" : given_name,
                    "surname" : surname,
                    "email_address" : email_address,
                    "address_line_1" : address_line_1,
                    "address_line_2" : address_line_2,
                    "postal_code" : postal_code,
                    "country_code" : country_code,
                },
                success: function(response)
                {
                    window.location.href = '/confirmPayment';
                }   

            });
        });
      }
    }).render('#paypal-button-container');
</script>

<script>
    $(document).ready(
    {
        $('#ship2').on('submit', '#ship2', function(e)
        {
            e.PreventDefault();
            var url = $(this).attr('action');
            var method = $(this).attr('method');

            $.ajax(
            {
                type: method,
                url: url,
                data: $(this).serialize(),
                success: function(data)
                {

                }
            });
        });
    });
</script>
<script>
    $('.shipCharge').change(function()
        {
            var ship = ($(this).val());
            if(ship==1)
            {
                var sub = $('#sub_total').val();
                if(sub >= 250){
                    var a = 0;
                    $('.ship5').html('$'+a);
                    var e = parseInt(sub) + parseInt(a);
                    $('.tot').html('$'+sub);
                }
                else
                {
                    var b = 20;
                    $('.ship5').html('$'+b);
                    var c = parseInt(sub) + parseInt(b);
                    $('.tot').html('$'+c);
                }
            }
            else if(ship==2)
            {

            }
            else
            {
                var sub = $('#sub_total').val();
                var d = 0;
                $('.ship5').html('$'+d);
                var f = parseInt(sub) + parseInt(d);
                $('.tot').html('$'+f);
            }
        });
</script>

<script async
  src="https://pay.google.com/gp/p/js/pay.js"
  onload="onGooglePayLoaded()"></script>

<script>
    /**
 * Define the version of the Google Pay API referenced when creating your
 * configuration
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#PaymentDataRequest|apiVersion in PaymentDataRequest}
 */
const baseRequest = {
  apiVersion: 2,
  apiVersionMinor: 0
};

/**
 * Card networks supported by your site and your gateway
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
 * @todo confirm card networks supported by your site and gateway
 */
const allowedCardNetworks = ["AMEX", "DISCOVER", "INTERAC", "JCB", "MASTERCARD", "VISA"];

/**
 * Card authentication methods supported by your site and your gateway
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
 * @todo confirm your processor supports Android device tokens for your
 * supported card networks
 */
const allowedCardAuthMethods = ["PAN_ONLY", "CRYPTOGRAM_3DS"];

/**
 * Identify your gateway and your site's gateway merchant identifier
 *
 * The Google Pay API response will return an encrypted payment method capable
 * of being charged by a supported gateway after payer authorization
 *
 * @todo check with your gateway on the parameters to pass
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#gateway|PaymentMethodTokenizationSpecification}
 */
const tokenizationSpecification = {
  type: 'PAYMENT_GATEWAY',
  parameters: {
    'gateway': 'example',
    'gatewayMerchantId': 'exampleGatewayMerchantId'
  }
};

/**
 * Describe your site's support for the CARD payment method and its required
 * fields
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
 */
const baseCardPaymentMethod = {
  type: 'CARD',
  parameters: {
    allowedAuthMethods: allowedCardAuthMethods,
    allowedCardNetworks: allowedCardNetworks
  }
};

/**
 * Describe your site's support for the CARD payment method including optional
 * fields
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
 */
const cardPaymentMethod = Object.assign(
  {},
  baseCardPaymentMethod,
  {
    tokenizationSpecification: tokenizationSpecification
  }
);

/**
 * An initialized google.payments.api.PaymentsClient object or null if not yet set
 *
 * @see {@link getGooglePaymentsClient}
 */
let paymentsClient = null;

/**
 * Configure your site's support for payment methods supported by the Google Pay
 * API.
 *
 * Each member of allowedPaymentMethods should contain only the required fields,
 * allowing reuse of this base request when determining a viewer's ability
 * to pay and later requesting a supported payment method
 *
 * @returns {object} Google Pay API version, payment methods supported by the site
 */
function getGoogleIsReadyToPayRequest() {
  return Object.assign(
      {},
      baseRequest,
      {
        allowedPaymentMethods: [baseCardPaymentMethod]
      }
  );
}

/**
 * Configure support for the Google Pay API
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#PaymentDataRequest|PaymentDataRequest}
 * @returns {object} PaymentDataRequest fields
 */
function getGooglePaymentDataRequest() {
  const paymentDataRequest = Object.assign({}, baseRequest);
  paymentDataRequest.allowedPaymentMethods = [cardPaymentMethod];
  paymentDataRequest.transactionInfo = getGoogleTransactionInfo();
  paymentDataRequest.merchantInfo = {
    // @todo a merchant ID is available for a production environment after approval by Google
    // See {@link https://developers.google.com/pay/api/web/guides/test-and-deploy/integration-checklist|Integration checklist}
    // merchantId: '01234567890123456789',
    merchantName: 'Example Merchant'
  };
  return paymentDataRequest;
}

/**
 * Return an active PaymentsClient or initialize
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/client#PaymentsClient|PaymentsClient constructor}
 * @returns {google.payments.api.PaymentsClient} Google Pay API client
 */
function getGooglePaymentsClient() {
  if ( paymentsClient === null ) {
    paymentsClient = new google.payments.api.PaymentsClient({environment: 'TEST'});
  }
  return paymentsClient;
}

/**
 * Initialize Google PaymentsClient after Google-hosted JavaScript has loaded
 *
 * Display a Google Pay payment button after confirmation of the viewer's
 * ability to pay.
 */
function onGooglePayLoaded() {
  const paymentsClient = getGooglePaymentsClient();
  paymentsClient.isReadyToPay(getGoogleIsReadyToPayRequest())
      .then(function(response) {
        if (response.result) {
          addGooglePayButton();
          // @todo prefetch payment data to improve performance after confirming site functionality
          // prefetchGooglePaymentData();
        }
      })
      .catch(function(err) {
        // show error in developer console for debugging
        console.error(err);
      });
}

/**
 * Add a Google Pay purchase button alongside an existing checkout button
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#ButtonOptions|Button options}
 * @see {@link https://developers.google.com/pay/api/web/guides/brand-guidelines|Google Pay brand guidelines}
 */
function addGooglePayButton() {
  const paymentsClient = getGooglePaymentsClient();
  const button =
      paymentsClient.createButton({onClick: onGooglePaymentButtonClicked});
  document.getElementById('container').appendChild(button);
}

/**
 * Provide Google Pay API with a payment amount, currency, and amount status
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#TransactionInfo|TransactionInfo}
 * @returns {object} transaction info, suitable for use as transactionInfo property of PaymentDataRequest
 */
function getGoogleTransactionInfo() {
  return {
    countryCode: 'US',
    currencyCode: 'USD',
    totalPriceStatus: 'FINAL',
    // set to cart total
    totalPrice: '1.00'
  };
}

/**
 * Prefetch payment data to improve performance
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/client#prefetchPaymentData|prefetchPaymentData()}
 */
function prefetchGooglePaymentData() {
  const paymentDataRequest = getGooglePaymentDataRequest();
  // transactionInfo must be set but does not affect cache
  paymentDataRequest.transactionInfo = {
    totalPriceStatus: 'NOT_CURRENTLY_KNOWN',
    currencyCode: 'USD'
  };
  const paymentsClient = getGooglePaymentsClient();
  paymentsClient.prefetchPaymentData(paymentDataRequest);
}

/**
 * Show Google Pay payment sheet when Google Pay payment button is clicked
 */
function onGooglePaymentButtonClicked() {
  const paymentDataRequest = getGooglePaymentDataRequest();
  paymentDataRequest.transactionInfo = getGoogleTransactionInfo();

  const paymentsClient = getGooglePaymentsClient();
  paymentsClient.loadPaymentData(paymentDataRequest)
      .then(function(paymentData) {
        // handle the response
        processPayment(paymentData);
      })
      .catch(function(err) {
        // show error in developer console for debugging
        console.error(err);
      });
}

/**
 * Process payment data returned by the Google Pay API
 *
 * @param {object} paymentData response from Google Pay API after user approves payment
 * @see {@link https://developers.google.com/pay/api/web/reference/response-objects#PaymentData|PaymentData object reference}
 */
function processPayment(paymentData) {
  // show returned data in developer console for debugging
    console.log(paymentData);
  // @todo pass payment token to your gateway to process payment
  paymentToken = paymentData.paymentMethodData.tokenizationData.token;
}
</script>
@endsection
