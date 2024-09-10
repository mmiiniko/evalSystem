<?php
if (isset($_GET["tid"]) && $_GET["sbjc"]) {
		
		$connection = new mysqli("localhost", "u739502687_efp", "evaluationsystem", "u739502687_eval");
$con = mysqli_connect("localhost", "u739502687_efp", "evaluationsystem", "u739502687_eval");
$tchr= $connection->real_escape_string($_GET["tid"]);
$result = mysqli_query($con, "SELECT * FROM teacher WHERE tid ='$tchr' ");
$rows = mysqli_fetch_array($result);
}
?>