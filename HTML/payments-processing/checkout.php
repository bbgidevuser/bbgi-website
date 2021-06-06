<?php
include('./../config.php');
include_once('global.inc.php');
/**
 * @param array $data
 * @param null $passPhrase
 * @return string
 */
function generateSignature($data, $passPhrase) {
    // Create parameter string
    $pfOutput = '';
    foreach( $data as $key => $val ) {
        if(!empty($val)) {
            $pfOutput .= $key .'='. urlencode( trim( $val ) ) .'&';
        }
    }
    // Remove last ampersand
    $getString = substr( $pfOutput, 0, -1 );
    if( $passPhrase !== null ) {
        $getString .= '&passphrase='. urlencode( trim( $passPhrase ) );
    }
    return md5( $getString );
}

// Construct variables
//$cartTotal = window.sessionStorage.getItem('price');
$cartTotal = 100.00;// This amount needs to be sourced from your application
//$cartTotal = returnCartTotal();
//$cartTotal = $GLOBALS['price'];// This amount needs to be sourced from your application

$passPhrase = 'Ch4ng31sg00d';
$data = array(
    // Merchant details
    'merchant_id' => '17527709',
    'merchant_key' => 'jigdq6d3e0l84',
    'return_url' => 'http://bbgi.co.za/payments-processing/return.php',
    'cancel_url' => 'http://bbgi.co.za/payments-processing/cancel.php',
    'notify_url' => 'http://bbgi.co.za/payments-processing/notify.php',
    // Buyer details
    'name_first' => 'First Name',
    'name_last'  => 'Last Name',
    //'email_address'=> 'test@test.com',
    'email_address'=> 'info@bbgi.co.za',
    // Transaction details
    'm_payment_id' => '000001', //Unique payment ID to pass through to notify_url

  //'amount' => number_format( sprintf( '%.2f', $GLOBALS['price'] ), 2, '.', '' ),
    'amount' => number_format( sprintf( '%.2f', $cartTotal ), 2, '.', '' ),
    'item_name' => '#000001'
);

$signature = generateSignature($data, $passPhrase);
$data['signature'] = $signature;

// If in testing mode make use of either sandbox.payfast.co.za or www.payfast.co.za
$testingMode = false;
$pfHost = $testingMode ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
$htmlForm = '<form action="https://'.$pfHost.'/eng/process" method="post">';
foreach($data as $name=> $value)
{
    $htmlForm .= '<input name="'.$name.'" type="hidden" value="'.$value.'" />';
}
$htmlForm .= '<input type="submit" class="contact200-form-btn button-cta" value="Process Payment"></form>';
//$htmlForm .= '<button form="individualPaymentForm" class="contact100-form-btn">Process payment</button>';
//echo $htmlForm;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Checkout</title>
        <link rel="stylesheet" href="css/main.css">
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>
        <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <script>
      function saveForm(price){

              document.getElementById('price').value = price;
              var priceElement = document.getElementById("price").value;
              //$GLOBALS['price'] = priceElement;
              $price = priceElement;
              //window.sessionStorage.setItem('price', JSON.stringify(priceElement));
      }
    </script>
    <body>
        <div class="checkout">
            <div class="order">

              <form class="contact200-form validate-form" action="" method="POST">
			      <span class="contact100-form-title">
            	Process payment
            </span>
                <div class="container">
                  <div class="row">

                    <div class="col-sm-4">
                      <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <label class="label-input100" for="name">Name</label>
                        <input id="name" class="input100" type="text" name="name" placeholder="Enter your name...">
                        <span class="focus-input100"></span>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="wrap-input100 validate-input" data-validate="Surname is required">
                        <label class="label-input100" for="surname">Surname</label>
                        <input id="surname" class="input100" type="text" name="surname" placeholder="Enter your surname...">
                        <span class="focus-input100"></span>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="wrap-input100 validate-input" data-validate="Profession is required">
                        <label class="label-input100" for="profession">Profession</label>
                        <input id="profession" class="input100" type="text" name="profession" placeholder="Enter your profession...">
                        <span class="focus-input100"></span>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="container">
                  <div class="row">

                    <div class="col-sm-4">
                      <div class="wrap-input100 validate-input" data-validate="Company is required">
                        <label class="label-input100" for="company">Company</label>
                        <input id="company" class="input100" type="text" name="company" placeholder="Enter your company...">
                        <span class="focus-input100"></span>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="wrap-input100 validate-input" data-validate = "Contact number is required">
                        <label class="label-input100" for="email">Contact Number</label>
                        <input id="email" class="input100" type="text" name="phone" placeholder="Enter your contact number...">
                        <span class="focus-input100"></span>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="wrap-input100 validate-input" data-validate = "Service Description">
                        <label class="label-input100" for="description">Attending as</label>
                        <!--<select class="select2-dropdown" name="capacity" id="capacity" onChange="document.getElementById('price').value=this.value;">-->
                        <select class="select2-dropdown" name="capacity" id="capacity" onChange="return saveForm(this.value)">
                          <option data-capacity="0" class="select2-results__option" value="default">Please select</option>
                          <option data-capacity="1" class="select2-results__option" value="100">Student</option>
                          <option data-capacity="2" class="select2-results__option" value="100">Individual</option>
                          <option data-capacity="3" class="select2-results__option" value="100">Business</option>
                        </select>
                        <span class="focus-input100"></span>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="container">
                  <div class="row">

                  </div>
                </div>

                <div class="container">
                  <div class="row">

                    <div class="col-sm-6">
                      <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <label class="label-input100" for="email">Email Address</label>
                        <input id="email" class="input100" type="text" name="email" placeholder="Enter your email...">
                        <span class="focus-input100"></span>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="wrap-input100 validate-input" data-validate = "Ticket Price">
                        <label class="label-input100" for="email">Ticket Price</label>
                        <input id="price" class="input100" type="text" name="price" placeholder="Enter ticket price...">
                        <span class="focus-input100"></span>
                      </div>
                    </div>

                  </div>
                </div>

                <!--<div class="wrap-checkbox100 validate-input" data-validate = "Rules">-->
                <!--<div class="container-contact100-form-btn">-->
                  <!--<input type="hidden" Name="membership" Value="$_SESSION['membership']" >-->
                  <!--<button form="individualPaymentForm" class="contact100-form-btn">
                    Process payment
                  </button>-->
                <!--</div>-->
              </form>

              <?php
              echo $htmlForm;

              ?>

                <!-- Customer Details -->
                <input type="hidden" name="name_first" value="John">
                <input type="hidden" name="name_last" value="Doe">
                <input type="hidden" name="email_address" value="john@doe.com">
                <input type="hidden" name="cell_number" value="0823456789">

                <!-- Transaction Details -->
                <input type="hidden" name="m_payment_id" value="01AB">
                <input type="hidden" name="amount" value="100.00">
                <input type="hidden" name="item_name" value="Test Item">
                <input type="hidden" name="item_description" value="A test product">
                <input type="hidden" name="custom_int1" value="2">
                <input type="hidden" name="custom_str1" value="Extra order information">

                <!-- Transaction Options -->
                <input type="hidden" name="email_confirmation" value="1">
                <input type="hidden" name="confirmation_address" value="john@doe.com">

                <!-- Payment Methods -->
                <input type="hidden" name="payment_method" value="cc">
                <input type="hidden" name="payment_method" value="dc">
                <input type="hidden" name="payment_method" value="mp">
            </div>
        </div>
    </body>
</html>

