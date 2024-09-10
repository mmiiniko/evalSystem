<?php
  if (isset($_POST['send_btn'])){
  
  
  $aq1 = $_POST['aq1'];
  $aq2 = $_POST['aq2'];
  $aq3 = $_POST['aq3'];
  $aq4 = $_POST['aq4'];
  $aq5 = $_POST['aq5'];
  $bq1 = $_POST['bq1'];
  $bq2 = $_POST['bq2'];
  $bq3 = $_POST['bq3'];
  $bq4 = $_POST['bq4'];
  $bq5 = $_POST['bq5'];
  $comment = $_POST['comment'];

  
  
    
   include('functions.php');
include ('config.php');  

// SQL Query To Fetch Complete Isnformation Of User
$name = $row['fullname'];
$sec = $row['section'];
$studid = $_SESSION['login'];

//teacher info

$connection = new mysqli("localhost", "u739502687_efp", "evaluationsystem", "u739502687_eval");
$con = mysqli_connect("localhost", "u739502687_efp", "evaluationsystem", "u739502687_eval");
$tchr= $connection->real_escape_string($_GET["tid"]);
$result = mysqli_query($con, "SELECT * FROM teacher WHERE tid ='$tchr' ");
$rows = mysqli_fetch_array($result);

$fn = $rows['fullname'];
$sc = $rows['subjectcode'];
$sn = $rows['subjectname'];

date_default_timezone_set("Asia/Manila");
$date = date('M d, Y');
// Create connection

$conn = mysqli_connect("localhost", "u739502687_efp", "evaluationsystem", "u739502687_eval");

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
 //Get the sum of those numbers.
$sum = $aq1 + $aq2 + $aq3 + $aq4 + $aq5 + $bq1 + $bq2 + $bq3 + $bq4 + $bq5;
 
 $numbersInSet = 10;
//Calculate the average by dividing $sum by the
//amount of numbers that are in our set.
$average = $sum / $numbersInSet;

$sql = "INSERT INTO evaluation (comment, aq1, aq2, aq3, aq4, aq5, bq1, bq2, bq3, bq4, bq5,total ,fullname, section, studentid, date, facultyname, subjectcode, subjectname)  
            VALUES('$comment','$aq1','$aq2','$aq3','$aq4','$aq5','$bq1','$bq2','$bq3','$bq4','$bq5','$average','$name','$sec','$studid','$date','$fn','$sc','$sn')";  
if (mysqli_query($conn, $sql)) {
      echo " ";
    header('location: evaluate.php');
} else {
       $message ="Invalid!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header('Refresh:.0; url=start.php');
    die();
}
mysqli_close($conn);
}
 
?>