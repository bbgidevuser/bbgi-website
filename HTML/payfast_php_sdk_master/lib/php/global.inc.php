<?php
    //session_start();
    //echo $_SESSION['membership']; // individual
	/**
	 * Gets the current URL of the web server running the sample code
	 *
	 * @return array
	 */
	$membershipType = '';
function getMembershipAmount($membership){

        $membershipType = $membership;

        $amount = '';

        if('individual' == $membership){
            $amount = 100;
        }else if($membership == 'student'){
            $amount = 75;
        } else if ($membership == 'business'){
            $amount = 200;
        }
        return $amount;
}
$membershipAmount = getMembershipAmount($membershipType);