# Verify-Nigeria-Number.php
Verify if a phone number is Nigerian and if it is what network and more. This file is for php programmers like me whom prefers to code raw and not join the zombies using laravel. 

# How to use the Naija number verifier (Raw php).

step 1:>> download the check.php file
step 2:>> include the check.php file on the file expected to use the naija number verification
step 3:>> init the object and use the functions


# Installation and use 
include("check.php");

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
