<?php
include 'gettoken2017.php';
header('Content-type: text/plain');

if(preg_match('/"([^"]+)"/', $token1[0], $m2)) { 
 
$url2= "https://retailbanking.mybluemix.net/banking/icicibank/account_summary?client_id=sabyasachee.panda@gmail.com&token=".$m2[1]."&custid=33335429&accountno=4444777755550429";

$jsondata2 = file_get_contents($url2);


$someArray = json_decode($jsondata2, true);
$accdetails1 = implode(" ", $someArray[1]);
$accparams= explode(" ",$accdetails1);
		


echo " Bank Account Summary for :- \n\n";
echo "Account No : \t". $accparams[16]."\n";
echo "Reward_point: \t". $accparams[17]."\n";
echo "balance: \t". $accparams[15]."\n";
echo "mobileno: \t". $accparams[8]."\n";
echo "wallet_balance: ". $accparams[6]."";





}
?> 