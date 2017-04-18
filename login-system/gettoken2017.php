<?php
header('Content-Type: application/json');

$endpoint = "https://corporateapiprojectwar.mybluemix.net/corporate_banking/mybank/authenticate_client?client_id=sabyasachee.panda@gmail.com&password=Q6K9GS6V";

//  Initiate curl
$ch = curl_init();

// Set The Response Format to Json
curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json'));

// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Set the url
curl_setopt($ch, CURLOPT_URL,$endpoint);

// Execute
$result=curl_exec($ch);

$token = explode (":", $result);
$token1 = explode ("}", $token[1]);
//echo $token1[0];

// Closing
curl_close($ch);

?>