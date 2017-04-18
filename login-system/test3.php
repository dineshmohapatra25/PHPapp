<?php
include 'test1.php';


 

if(preg_match('/"([^"]+)"/', $token1[0], $m2)) { 
 
$url2= "https://retailbanking.mybluemix.net/banking/icicibank/account_summary?client_id=sabyasachee.panda@gmail.com&token=".$m2[1]."&custid=33335429&accountno=4444777755550429";
//echo $url2;
$jsondata2 = file_get_contents($url2);

//$obj = json_decode(file_get_contents($url2), true);
$someArray = json_decode($jsondata2, true);
$accdetails1 = implode(" ", $someArray[1]);
$accparams= explode(" ",$accdetails1);
		//print_r($someArray);



//echo " Bank Account Summary for :- \n\n";
//echo "Account No : \t". $accparams[16]."\n";
//echo "Reward_point: \t". $accparams[17]."\n";
//echo "balance: \t". $accparams[15]."\n";
//echo "mobileno: \t". $accparams[8]."\n";
//echo "wallet_balance: ". $accparams[6]."";

//echo '<pre>' . $accparams[6]. '</pre>';


}
?> 
<?php

/* Displays user information and some useful messages */

session_start();

echo '  
 
 <html> 
 <center>
 <img src="/img/icici12.JPG" width="1350" height="80"/> 
 
 </center>
  <br>
 </html> 
 ';
 


?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Account Details <?= $accparams[16].' '.$accparams[15] ?></title>
  <?php include 'css/css.html'; ?>
</head>

<body>
  <div class="form">

          <h1>ICICI Rewards program - Redeem Reward Points | </h1>
          
          <p>
       
          </p>
          
      
          
          <h2>Total Reward_point:-</h2><p><?php echo $accparams[17]; ?></p>
		  
          
        <?php  
       //   <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
	   
	    echo '  
	 <br> <center><a href="https://www.uber.com/en-IN/"> Uber</a> &nbsp; &nbsp; &nbsp;&nbsp; <a href="https://www.makemytrip.com/"> MakeMyTrip  </a>&nbsp; &nbsp; &nbsp;&nbsp; <a href="https://in.bookmyshow.com/"> BookMyShow </a></center></h4></td> 
   </tr>
   
</table>
  </body>
 </html> 
 ';
       ?>
    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
<?php  
       include 'test1.php';
	   
       ?>
</body>
</html>




