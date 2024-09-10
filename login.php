

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	<link rel="stylesheet" type="text/css" href="css/mainsignup.css">
<!--===============================================================================================-->
</head>
</style>
<body style="background-color: #999999;">

<script>
              
              function LettersOnly(input){
                  var regex = /[^a-z]/gi;
                  input.value = input.value.replace(regex, "");
              }
              
                 function NumbersOnly(input){
                  var regex = /[^0-9]/g;
                  input.value = input.value.replace(regex, "");
              }
              
          </script>
		  
		<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/BACKGROUND.png');">
			</div>
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<center><img src="images/logo.png" width="50%"></center><br>
				<center><p><font size="5px;"><b>Senior High School</font></b></p></center>
				<center><p><font size="5px;"><b>Evaluation on Faculty Performance</font></b></p></center>
				<br>
					<span class="login100-form-title p-b-59">
						Sign in
					</span>
								<form method="post" action="index.php">
											<br>				
					<div class="wrap-input100 validate-input" data-validate = "Enter ID Number">
						<span class="label-input100">ID Number</span>
						<input class="input100" type="text" name="username" placeholder="Id Number..." value="" onkeyup="NumbersOnly">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Enter Password">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
						<input type="hidden" name="csrf" value="">
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="login_btn">
								Login
							</button>
						</div>

							<a href="signup.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign up
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>

						</form>
					</div>
				</div>
			</div>
		</div>
		
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
		
</body>
</html>