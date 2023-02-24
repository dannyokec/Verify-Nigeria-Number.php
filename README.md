# Verify-Nigeria-Number.php
Verify if a phone number is Nigerian, and if it is indeed Nigerian, get the info on what service provider (Network) the number operates on.
This file is for php programmers like [Me]([https://da](https://github.com/dannyokec)) whom prefers raw php to laravel.
The set up of this plugin is simple : just download the project as zip, extract and include plugin file (check.php) on your project

# How to use the Naija number verifier (Raw php).

## step 1:
>> Download the project [Verify-Nigeria-Number]([https://](https://github.com/dannyokec/Verify-Nigeria-Number.php/archive/refs/heads/main.zip) and extarct.

## Step 2 :
>> Move / upload the file check.php into the same folder as the file you would be needing the verification plugin on.

## step 3 :
>> Include the check.php file on the file expected to use the naija number verification
## step 4:
>> init the object and use the functions


## Installation and test usage 
```include("check.php");

 This would your own file that would do its normal things

 #lets init the checker object
$naijaNumber = new PhoneNumber("+23480000145"); // init the object using the phone number as a constructor

 #Check if it is a valid Nigerian phone number
$naijaNumber->isValid(); // true

 #Get formatted / format the phone number without using +234 in other words format as would be used locally in nigeria calls
$naijaNumber->formatted(); // 08135087966

 #Get the Nigerian Network /ISP
$naijaNumber->getNetwork(); // mtn

 #Check if the Phone number is specifically MTN Nigeria
$naijaNumber->isMtn(); // True


 #Get network from phone number prefix e.g
$naijaNumber->getNetworkByPrefix('0703'); // mtn

```
