<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Registration system PHP and MySQL</title>
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
	<?php echo display_error(); ?>
	<div class="input-group">
		<label>Full Name</label>
		<input type="text" name="fullname" value="<?php echo $fullname; ?>">
	</div>
	<div class="input-group">
		<label>ID Number</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>School Year</label>
		<input type="text" name="schoolyear" value="<?php echo $schoolyear; ?>">
	</div>
	<div class="input-group">
		<label>Grade</label>
		<input type="text" name="grade" value="<?php echo $grade; ?>">
	</div>
	<div class="input-group">
		<label>Strand</label>
		<input type="text" name="strand" value="<?php echo $strand; ?>">
	</div>
	<div class="input-group">
		<label>Section</label>
		<input type="text" name="section" value="<?php echo $section; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>