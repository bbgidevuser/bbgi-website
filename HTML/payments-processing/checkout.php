<?php
/**
 * @param array $data
 * @param null $passPhrase
 * @return string
 */
function generateSignature($data, $passPhrase = null) {
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
$cartTotal = 150.00;// This amount needs to be sourced from your application
$data = array(
    // Merchant details
    'merchant_id' => '10000100',
    'merchant_key' => '46f0cd694581a',
    'return_url' => 'http://bbgi.co.za/payments-processing/return.php',
    'cancel_url' => 'http://bbgi.co.za/payments-processing/cancel.php',
    'notify_url' => 'http://bbgi.co.za/payments-processing/notify.php',
    // Buyer details
    'name_first' => 'First Name',
    'name_last'  => 'Last Name',
    'email_address'=> 'test@test.com',
    // Transaction details
    'm_payment_id' => '000001', //Unique payment ID to pass through to notify_url
    'amount' => number_format( sprintf( '%.2f', $cartTotal ), 2, '.', '' ),
    'item_name' => '#000001'
);

$signature = generateSignature($data);
$data['signature'] = $signature;

// If in testing mode make use of either sandbox.payfast.co.za or www.payfast.co.za
$testingMode = true;
$pfHost = $testingMode ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
$htmlForm = '<form action="https://'.$pfHost.'/eng/process" method="post">';
foreach($data as $name=> $value)
{
    $htmlForm .= '<input name="'.$name.'" type="hidden" value="'.$value.'" />';
}
$htmlForm .= '<input type="submit" class="button-cta" value="Process Payment"></form>';
echo $htmlForm;

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Checkout</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="subject">Checkout Check<br>Checkout </br> Check</div>

        <div class="checkout">
            <div class="order">
                <h2>Checkout Demo</h2>
                <h5>Order #000001</h5>
                <ul class="order-list">
                    <li><h4>Product 1</h4><h5>R1100</h5></li>
                    <li><h4>Product 2</h4><h5>R280</h5></li>
                    <li><h4>Product 3</h4><h5>R200</h5></li>
                </ul>
                <h5>Shipping</h5><h4>R90.00</h4>
                <h5 class="total">Total</h5><h1>R1670.00</h1>


                <?php echo $htmlForm; ?>

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

