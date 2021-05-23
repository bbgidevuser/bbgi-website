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
function getMembershipAmount($membership){
//consoleLog('Have reached getMembershipAmount');
echo("<script>console.log('PHP: " . 'Have reached getMembershipAmount 1' . "');</script>");
        $membershipType = $membership;
  //consoleLog('Membership Type ' + $membership);


    echo("<script>console.log('Have reached getMembershipAmount 2 membership type: " . json_encode($membershipType) . "');</script>");

        if('individual' == $membership){
            $amount = 100;
            $cartTotal = $amount;
          //consoleLog('Individual Cart Total ' + $cartTotal);
        }else if($membership == 'student'){
            $amount = 75;
            $cartTotal = $amount;
          //consoleLog('Student Cart Total ' + $cartTotal);
        } else if ($membership == 'business'){
            $amount = 200;
            $cartTotal = $amount;
          //consoleLog('Business Cart Total ' + $cartTotal);
        }
        setCartTotal($cartTotal);
        return $amount;
}

function setMembershipAmount($amount){
    $amount = amount;
}

function setCartTotal($cartTotal){
  //console_log('Cart total set to ' + $cartTotal);
  echo("<script>console.log('PHP: " . 'Cart total set to' . " $cartTotal ');</script>");
  this.$cartTotal = $cartTotal;
}

function returnCartTotal(){
  return $GLOBALS['cartTotal'];
}

//$membershipAmount = getMembershipAmount($membershipType);
$cartTotal = getMembershipAmount($membershipType);
