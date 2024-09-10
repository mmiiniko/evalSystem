<?php
if(isset($_POST['submit'])){
	
	$id = $_POST['eval'];
	$conn = mysqli_connect("localhost", "root", "", "accounts");
$ress= mysqli_query($conn, 'SELECT * FROM teacher WHERE subjectcode = "' .$_POST['eval'] .'" ');
$roww = mysqli_fetch_array($ress);
$tid= $roww['tid'];
	header('location: start.php?tid='.$tid.'&&sbjc='.$id);
	}
?>