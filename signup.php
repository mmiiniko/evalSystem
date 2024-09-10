<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
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
</head>
</style>
<body style="background-color: #999999;">

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/BACKGROUND.png');"></div>
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
								<center><img src="images/logo.png" width=50%"></center><br>
				<center><p><font size="5px;"><b>Senior High School</font></b></p></center>
				<center><p><font size="5px;""><b>Evaluation on Faculty Performance</font></b></p></center>
				<br>
				<form class="login100-form validate-form" method="post" action="signup.php">
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required: ">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="fullname" placeholder="Name..." value="<?php echo $fullname; ?>">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate="ID Number is required: ">
						<span class="label-input100">ID Number</span>
						<input class="input100" type="text" name="username" placeholder="ID Number..." onkeyup="NumbersOnly(this)" value="<?php echo $username; ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess..." value="<?php echo $email; ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="School Year is required: ">
						<span class="label-input100">School Year</span>
						<input class="input100" type="text" name="schoolyear" placeholder="School Year..." value="<?php echo $schoolyear; ?>">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Grade is required: ">
						<span class="label-input100">Grade</span>
						<input class="input100" type="text" name="grade" placeholder="Grade..." onkeyup="NumbersOnly(this)" value="<?php echo $grade; ?>">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Strand is required: ">
						<span class="label-input100">Strand</span>
						<input class="input100" type="text" name="strand" placeholder="Strand..." value="<?php echo $strand; ?>">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Section is required: ">
						<span class="label-input100">Section</span>
						<input class="input100" type="text" name="section" placeholder="Section..." value="<?php echo $section; ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required: ">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password_1" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required: ">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="password" name="password_2" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="register_btn">
								Sign Up
							</button>
						</div>

						<a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
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