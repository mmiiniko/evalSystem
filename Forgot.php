<?php
if (isset($_POST['rstpass'])) {
    
    	// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "u152674727_user", "5142332", "u152674727_vote");

  $mail = $_POST["email"];
  
// SQL Query To Fetch Complete Isnformation Of User
$sql = "SELECT * FROM users WHERE email = '$mail'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

    $connection = new mysqli("localhost", "u152674727_user", "5142332", "u152674727_vote");
      $email = $connection->real_escape_string($_POST["email"]);
    $idnumber = $connection->real_escape_string($row["idnumber"]);
    
$firstn = $row['firstname'];

		
		$data = $connection->query("SELECT id FROM users WHERE email='$email'");

		if ($data->num_rows > 0) {
			$str = "0123456789qwertzuioplkjhgfdsayxcvbnm-QWERTYUIOPASDFGHJKLZXCVBNM";
			$str = str_shuffle($str);
			$str = substr($str, 0, 40);
			$hstr = md5($str);
			
			$pscd = "0123456789";
			$pscd = str_shuffle($pscd);
			$pscd = substr($pscd, 0, 6);
			$hpscd = md5($pscd);
        $url="https://www.lccm-votingsystem.online/ValidateAttempReset?aid=$hstr&sid=$idnumber";
        $aemail="<a href = 'mailto:admin@lccm-efp.tech?subject = ContactAdmin&body = Message'>
email </a>";
        $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "From: Consola De Vote <noreply@lccm-votingsystem.online> \r\n";

       		mail($email, "Password Reset","Hi, ".$firstn. " ". "<br>" ."   You've requested us password reset, kindly proceed to the link and enter the 6 digit provided <br> Your Code is: $pscd <br> Please Click on this link to $url <br> Kindly us at $aemail if you need further help <br> Thank You!.", "$headers");
        
	$connection->query("UPDATE users SET token='$hstr', passcode='$hpscd' WHERE email='$email'");
         
      header ('location: mail_confirm');
         
        }else {
        $message = "Please check your Email";
		echo "<script type='text/javascript'>alert('$message');</script>";
	  header('Refresh:.0; url=Forgot');
    }
}


?>

<!DOCTYPE html>
<html>
<head>
	
<title>Reset Password</title>
<link rel="icon" type="image/png" href="images/header.png">
<link rel="stylesheet" href="Register.css">


</head>

<body>

<div>
<img src="images/header.png" width="100%" height="100%">
</div>

<div id="bg"></div>


   <div class="form">
        
        <div id="login">   
          <h1>Forgot Password</h1>
          
          <form action="Forgot" method="post">
              
           <div class="field-wrap">
            <label>
             Email Address<span class="req"></span>
            </label>
            <input type="email" name="email" required/>
           </div>
           
          <input type="submit" name="rstpass" class="button button-block" value="Verify Password">
          <br>
          <input type="submit" name="rstpass" class="button button-block" value="Back">
          
          </form>

        </div>
        
      </div>



</body>
</html>
        