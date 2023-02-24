<?php
// This would your own file that would do its normal things

// lets init the checker object
$naijaNumber = new PhoneNumber("+23480000145"); // init the object using the phone number as a constructor

// Check if is valid
$naijaNumber->isValid(); // true

// Get formatted
$naijaNumber->formatted(); // 08135087966

// Get Network
$naijaNumber->getNetwork(); // mtn

// Check if is mtn
$naijaNumber->isMtn(); // True


// Get network from phone number prefix e.g
$naijaNumber->getNetworkByPrefix('0703'); // mtn


?>
