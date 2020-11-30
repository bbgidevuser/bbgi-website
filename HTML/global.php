<?php
/**
 * @param $membership
 */
function generateMembershipOptions($membership){
    echo $membership;
    if($membership){
        $_SESSION['type'] = $membership;
    }
}
$currentMembership  = generateMembershipOptions();
?>
