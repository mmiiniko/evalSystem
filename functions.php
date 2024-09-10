<?php
session_start();

$db = mysqli_connect("localhost", "root", "", "");

$fullname = "";
$username = "";
$email = "";
$schoolyear = "";
$grade = "";
$strand = "";
$section = "";
$errors   = array();

if (isset($_POST['register_btn'])) {
	register();
}

function register(){
	global $db, $errors, $username, $email;

    $fullname    =  e($_POST['fullname']);
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
 	$schoolyear  =  e($_POST['schoolyear']);
	$grade       =  e($_POST['grade']);
	$strand      =  e($_POST['strand']);
	$section     =  e($_POST['section']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	if (empty($fullname)) { 
		array_push($errors, "Fullname is required"); 
	}
	if (empty($username)) { 
		array_push($errors, "ID number is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($schoolyear)) { 
		array_push($errors, "School Year is required"); 
	}
	if (empty($grade)) { 
		array_push($errors, "Grade is required"); 
	}
	if (empty($strand)) { 
		array_push($errors, "Strand is required"); 
	}
	if (empty($section)) { 
		array_push($errors, "Section is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	if (count($errors) == 0) {
		$password = md5($password_1);

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO accounts (fullname, username, email, schoolyear, grade, strand, section, user_type, password) 
					  VALUES('$fullname', '$username', '$email', '$schoolyear', '$grade', '$strand', '$section', $user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: home.php');
		}else{
			$query = "INSERT INTO accounts (fullname, username, email, schoolyear, grade, strand, section, user_type, password) 
					  VALUES('$fullname', '$username', '$email', '$schoolyear', '$grade', '$strand', '$section', 'student', '$password')";
			mysqli_query($db, $query);

			$logged_in_user_id = mysqli_insert_id($db);
			$_SESSION['login'] = $username;
			$_SESSION['user'] = getUserById($logged_in_user_id); 
			$_SESSION['success']  = "You are now logged in";
			
			header('location: index.php');				
		}
	}
}

function getUserById($id){
	global $db;
	$query = "SELECT * FROM accounts WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['login']);
	unset($_SESSION['user']);
	header("location: register.php");
}

if (isset($_POST['login_btn'])) {
	login();
}

	
function login(){
	global $db, $username, $errors;

	$username = e($_POST['username']);
	$password = e($_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

//create a key for hash_hmac function

$_SESSION['tteesstt'] = $_SESSION['hashfcsrf'];

if (isset($_POST['login_btn'])) {
		if ($_SESSION['hashfcsrf'] == $_SESSION['tteesstt']){   

	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM accounts WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { 
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {
				$_SESSION['login'] = $username;
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin/index.php');		  
			}else{
				$_SESSION['login'] = $username;
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
			$_SESSION['username'] = $_POST['username'];
				header('location: index.php');
				
			}
		}else {
			array_push($errors, "Username and Password doesn't match");
		}
	}
}

function isStaff()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

}
}


?>