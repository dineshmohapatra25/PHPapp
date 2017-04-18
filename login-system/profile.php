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
  <title>login successful <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>
</head>

<body>
  <div class="form">

          <h1>Login successful</h1>
          
          <p>
          <?php 
     
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
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
          <h2>User Name:-</h2><h2><?php echo $first_name.' '.$last_name; ?></h2>
          <p><?= $email ?></p>
        <?php  
       //   <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
	   
	    echo '  
	 <br> <a href="http://localhost:8012/login-system/test2.php"> Bank Account Summary </a> </h4></td> 
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



