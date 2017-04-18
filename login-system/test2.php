
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
 
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}

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

          <h1>Bank Account Summary</h1>
          
          <p>
          <?php 
		  {
          // Display message about account verification link only once
          
              
//echo "Account No : \n". $accparams[16].PHP_EOL;
//echo "Reward_point: ". $accparams[17]."\n";
//echo "balance: ". $accparams[15]."\n";
//echo "mobileno:t". $accparams[8]."\n";
//echo "wallet_balance: ". $accparams[6]."";
              
       }
          
          ?>
          </p>
          
          <?php
          /*
          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link!
              </div>';
          }
          */
		 ?>
          <h2>Account No:-</h2><p><?php echo $accparams[16]; ?></p>
          <h2>Reward_point:-</h2><p><?php echo $accparams[17]; ?></p>
		<h1>  <?php  
       //   <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
	   
	    echo '  
	  <br> <center> <a href="http://localhost:8012/login-system/test3.php"> Redeem Reward Points</a></center> </h4></td> 
   </tr>
   
</table>
  </body>
 </html> 
 ';
       ?></h1>
    
		  <h2>Balance:-</h2><p><?php echo $accparams[15]; ?></p>
		  <h2>Mobile No:-</h2><p><?php echo $accparams[8]; ?></p>
		  <h2>wallet_balance:-</h2><p><?php echo $accparams[6]; ?></p>
        <?php  
          ?>
          
        <?php  
       //   <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
	   
	   
       ?>
    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>