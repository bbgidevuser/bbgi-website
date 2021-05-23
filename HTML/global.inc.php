<?php
    //session_start();
    //echo $_SESSION['membership']; // individual
	/**
	 * Gets the current URL of the web server running the sample code
	 *
	 * @return array
	 */
	$membershipType = '';
  $amount = '';
  $cartTotal = '';
  $price = '';
  $membership = '';

function getCartTotal($membership){

        if('individual' == $membership){
          $cartTotal = 100;
        }else if($membership == 'student'){
          $cartTotal = 75;
        } else if ($membership == 'business'){
          $cartTotal = 200;
        }
        return $cartTotal;
}

//$membershipAmount = getMembershipAmount($membershipType);
$cartTotal = getCartTotal($membership);
