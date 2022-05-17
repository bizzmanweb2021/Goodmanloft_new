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
                 <select class="shipCharge" width=200 style="width: 100px; color:black;">
                            <option value='' selected>Select Shipping</option>
                            <option value='1'>Local Shipping</option>
                            <option value='2'>Express Local Shipping </option>
                            <option value='3'>Self Collection</option>
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
                                        
                        <p >Total <span class="tot">${{ $sub_total }}</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                 <div class="col-12 mb-60 mt-5">
                    <h3 style="margin-top:30px;">Payment Method</h3>
                    <div class="checkout-payment-method">
                        <div class="single-method">
                            <input type="radio" id="payment_cash" name="payment-method" value="cash">
                            <label for="payment_cash">Google Pay</label>
                            <p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                        </div>
                        <div class="single-method">
                            <input type="radio" id="payment_paypal" name="payment-method" value="paypal">
                            <label for="payment_paypal">Paypal</label>
                            <p data-method="paypal">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                        </div>
                        <div class="single-method">
                            <input type="radio" id="payment_cash" name="payment-method" value="cash">
                            <label for="payment_cash">Cash on Delivery</label>
                            <p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                        </div>
                    </div>
                </div> 
                <div id="paypal-button-container"></div>
                
                <button id="gpay" class="gpay  btn-block w-100" style="width:96% !important; margin: 0 13px !important; padding: 0 !important; border: none  !important;">
</button>
                <!-- <div id="googlepay"></div> -->
                

            </div>
        </div>
    </div><br>
    <div class="shipping-btn ">
        <a href="{{ route('confirm.payment') }}" data-amount="1280" data-id="3" class="btn order_now"><span>Continue To Payment</span></a> &nbsp;
        <a href="{{ route('checkout') }}"data-amount="1280" data-id="3" class="btn order_now"><span>Return to information</span></a>
    </div>
    </div>
</div>
<!--Contact section end-->

@endsection

@section('javascript')
<script type="text/javascript">
    //alert('hello');
    jQuery('#gpay').show();
    //jQuery('.gpay').show();

</script>    
<script async
  src="https://pay.google.com/gp/p/js/pay.js"
  onload="onGooglePayLoaded()"></script>

<script src="https://www.paypal.com/sdk/js?client-id=Adizxf9OQ6bntDa6O2iLB9_9hWyX-5W-rkMcqDZ6ieQ4bWtv51gdIFopTgG7ZrENQrDoDmAAkT6BuW1n&currency=USD"></script>
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
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);

               var user_id = $('user_id').val();
               var user_email = $('user_email').val();
               var coupon_code = $('coupon_code').val();
               var payment_method = $('payment_method').val();
               var order_total = $('order_total').val();
               var currency = $('currency').val();
               var payment_status = $('payment_status').val();


            $.ajax(
            {
                method: "POST",
                url: "/place-order",
                data:
                {
                    user_id : 'user_id',
                    user_email:'user_email',
                    coupon_code : 'coupon_code',
                    payment_method : 'Paid by Paypal',
                    order_total : 'order_total',
                    amount : 'amount',
                    currency : 'currency',
                    payment_status:'payment_status',
                },
                success:function(response)
                {
                    swat(response.status)
                    window.location.href="/confirmPayment"
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

  paymentDataRequest.callbackIntents = ["PAYMENT_AUTHORIZATION"];

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
    paymentsClient = new google.payments.api.PaymentsClient({
        environment: 'TEST',
      paymentDataCallbacks: {
        onPaymentAuthorized: onPaymentAuthorized
      }
    });
  }
  return paymentsClient;
}

/**
 * Handles authorize payments callback intents.
 *
 * @param {object} paymentData response from Google Pay API after a payer approves payment through user gesture.
 * @see {@link https://developers.google.com/pay/api/web/reference/response-objects#PaymentData object reference}
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/response-objects#PaymentAuthorizationResult}
 * @returns Promise<{object}> Promise of PaymentAuthorizationResult object to acknowledge the payment authorization status.
 */
function onPaymentAuthorized(paymentData) {
  return new Promise(function(resolve, reject){
    // handle the response
    processPayment(paymentData)
      .then(function() {
        resolve({transactionState: 'SUCCESS'});
      })
      .catch(function() {
        resolve({
          transactionState: 'ERROR',
          error: {
            intent: 'PAYMENT_AUTHORIZATION',
            message: 'Insufficient funds, try again. Next attempt should work.',
            reason: 'PAYMENT_DATA_INVALID'
          }
        });
	    });
  });
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
  document.getElementById('gpay').appendChild(button);
}

/**
 * Provide Google Pay API with a payment amount, currency, and amount status
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#TransactionInfo|TransactionInfo}
 * @returns {object} transaction info, suitable for use as transactionInfo property of PaymentDataRequest
 */
function getGoogleTransactionInfo() {
  return {
        displayItems: [
        {
          label: "Subtotal",
          type: "SUBTOTAL",
          price: "11.00",
        },
      {
          label: "Tax",
          type: "TAX",
          price: "1.00",
        }
    ],
    countryCode: 'US',
    currencyCode: "SGD",
    totalPriceStatus: "FINAL",
    totalPrice: "12.00",
    totalPriceLabel: "Total"
  };
}


/**
 * Show Google Pay payment sheet when Google Pay payment button is clicked
 */
function onGooglePaymentButtonClicked() {
  const paymentDataRequest = getGooglePaymentDataRequest();
  paymentDataRequest.transactionInfo = getGoogleTransactionInfo();

  const paymentsClient = getGooglePaymentsClient();
  paymentsClient.loadPaymentData(paymentDataRequest);
}

let attempts = 0;
/**
 * Process payment data returned by the Google Pay API
 *
 * @param {object} paymentData response from Google Pay API after user approves payment
 * @see {@link https://developers.google.com/pay/api/web/reference/response-objects#PaymentData|PaymentData object reference}
 */
function processPayment(paymentData) {
  return new Promise(function(resolve, reject) {
    setTimeout(function() {
      // @todo pass payment token to your gateway to process payment
      paymentToken = paymentData.paymentMethodData.tokenizationData.token;

			if (attempts++ % 2 == 0) {
	      reject(new Error('Every other attempt fails, next one should succeed'));      
      } else {
	      resolve({});      
      }
    }, 500);
  });
}
</script>
@endsection
