<?php

include('functions.php');
		include('config.php');

if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
} 

if (isset($_GET["tid"]) && $_GET["sbjc"]) {
		
		$connection = new mysqli("localhost", "root", "", "accounts");
$con = mysqli_connect("localhost", "root", "", "accounts");
$tchr= $connection->real_escape_string($_GET["tid"]);
$result = mysqli_query($con, "SELECT * FROM teacher WHERE tid ='$tchr' ");
$rows = mysqli_fetch_array($result);


$fn = $rows['fullname'];
$sn = $rows['subjectname'];
$sc = $rows['subjectcode'];
		
$tchid = $_GET['sbjc'];
$stdid = $_SESSION['login'];
			  
$result1 = mysqli_query($con, "SELECT * FROM evaluation WHERE subjectcode ='$tchid' && studentid ='$stdid' ");
$row1 = mysqli_fetch_array($result1);

  $tchid = $row1['subjectcode'];


        	if ($row1['status'] == 1) {
        	
        	      $message ="You have alreadey evaluated this subject!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header('Refresh:.0; url=evaluate.php');
    die();
        	    
        	}
		
			}
			else
			{
			    header('location: evaluate.php');
			}
			

?>


<!DOCTYPE html>
<html>
<title>Evaluate</title>
<head>	<link rel="icon" type="image/png" href="images/logo.png"/></head>
<body>
<style type="text/css">
	body{
 			margin: 0px;
      background: url(images/isa.jpg);
      background-size: cover;
      background-repeat: no-repeat;
 }
 ::-webkit-scrollbar {
    width: 10px;
}


::-webkit-scrollbar-track {
    background: white; 
}
 
::-webkit-scrollbar-track:hover{
    background: #01245e; 
}


::-webkit-scrollbar-thumb {
    background: #014488; 
}


::-webkit-scrollbar-thumb:hover {
    background: #017df9; 
}


    .box{
  width: 93%;
  height: 160%;
  padding: 20px;
  margin: 50px auto;  
  border: 10px;
  border-radius: 10px;
  transition: all 0.25s ease;
  background-color: rgba(0, 0, 0, 0.37);
  margin-bottom: 10%;

    }
    .box:hover {
  box-shadow: 0px 0px 40px 16px rgba(18,18,18,1.00); 
}
.pp{
  text-align: right;
  margin-right: 5%;
  color: white;
}
#th1,#th2{
  padding: 8px;
  text-align: left;
  width: 3%;
  border-bottom: 1px solid black;
  margin-bottom: 5%;
}
#table3{
  float: right;
  margin-right: 10%;  
}

table{
  color: white;  
  border-collapse: collapse;
}
  #table1{
    margin-top: 1%;
  }
  #td1 {
  border-bottom: 2px solid black;
  padding: 35px 30px 0px 10px;
  font-size: 18px;
}
  #td2, #td0{
  border-bottom: 2px solid black;
  padding: 10px 50px 0px 5px;
}
.i1{
 cursor: pointer;
 width: 5%;
 font-size: 20px
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
 </style>
<header>
   <img id="mg1" src="images/header.png" width="100%">
</header>

  <div id="header" class="box">
    <table style="font-size: 20px;">
      <tr>
        <th id="th1">Students Name: <?Php echo $row['fullname']; ?> </th>
        <th id="th1" colspan="2">Date: <?php date_default_timezone_set("Asia/Manila"); echo  date(' M d, Y'); ?></th>
      </tr>
      <tr>
        <th id="th2">Section: <?php echo $row['grade']."-".$row['section']; ?></th>
        <th id="th2" colspan="2">Student ID: <?php echo $_SESSION['login']; ?></th>
      </tr>
      <tr>
        <th id="th2">Faculty Name: <?php echo $fn ?> </th>
        <th id="th2">Subject Code: <?php echo $sc ?> </th>
        <th id="th2">Subject Name: <?php echo $sn ?></th>
      </tr>
      <tr>
        
      </tr>
    </table>
<br>
<hr>
<p class="pp"><b>Click in the appropriate button.</b></p>
<hr>

    <table id="table1" style="font-size: 18px; background-color: #003152;">
      <tr style="background-color: black;">
        <td id="td0"><center><b>A</b></center></td>
        <td id="td0" colspan="2"><font size="5px"><center><b> Faculty </b></center></font></td>
        <td id="td2"><b>Outstanding<br><br><center> 5 </b></center></td>
        <td id="td2"><b>Excellent<br><br><center><b> 4  </b></center></td>
        <td id="td2"><b>Very Good<br><br><center>3</center></td>
        <td id="td2"><b>Good<br><br><center>2</center></td>
        <td  id="td2"><b>Poor<br><br><center>1</center></td>
         <td  id="td2"><b><br><br><center>N/A</center></td>
      </tr>
      
     <form method="POST" action="start.php">


      <tr style="background-color: #003152;">
        <td id="td0"><center>1</center></td>
        <td id="td1" colspan="2"><font size="4.5px"><b>Has a mastery of the course content; updated on his/her field; possesses technical expertise and professional competencies</b></font></td>
        <td id="td2"><center><input type="radio" name="aq1" value="5" required></center></td>
        <td id="td2"><center><input type="radio" name="aq1" value="4"></center></td>
        <td id="td2"><center><input type="radio" name="aq1" value="3"></center></td>
        <td id="td2"><center><input type="radio" name="aq1" value="2"></center></td>
        <td id="td2"><center><input type="radio" name="aq1" value="1"></center></td>
        <td id="td2"><center><input type="radio" name="aq1" value="0"></center></td>
      </tr>
      <tr> 
        <td id="td0"><center>2</center></td>
        <td id="td1" colspan="2"><font size="4.5px"><b>Motivates and inspires all the students to think creatively and analytically</b></font></td>
        <td id="td2"><center><input type="radio" name="aq2" value="5" required></center></td>
        <td id="td2"><center><input type="radio" name="aq2" value="4"></center></td>
        <td id="td2"><center><input type="radio" name="aq2" value="3"></center></td>
        <td id="td2"><center><input type="radio" name="aq2" value="2"></center></td>
        <td id="td2"><center><input type="radio" name="aq2" value="1"></center></td>
        <td id="td2"><center><input type="radio" name="aq2" value="0"></center></td>
      </tr>
      <tr>
        <td id="td0"><center>3</center></td>
        <td id="td1" colspan="2"><font size="4.5px"><b>Encourages the student to think critically</b></font></td>
        <td id="td2"><center><input type="radio" name="aq3" value="5" required></center></td>
        <td id="td2"><center><input type="radio" name="aq3" value="4"></center></td>
        <td id="td2"><center><input type="radio" name="aq3" value="3"></center></td>
        <td id="td2"><center><input type="radio" name="aq3" value="2"></center></td>
        <td id="td2"><center><input type="radio" name="aq3" value="1"></center></td>
        <td id="td2"><center><input type="radio" name="aq3" value="0"></center></td>
      </tr>
      <tr>
        <td id="td0"><center>4</center></td>
        <td id="td1" colspan="2"><font size="4.5px"><b>Shows respect for students' opinion and sentivity to their needs</b></font></td>
        <td id="td2"><center><input type="radio" name="aq4" value="5" required></center></td>
        <td id="td2"><center><input type="radio" name="aq4" value="4"></center></td>
        <td id="td2"><center><input type="radio" name="aq4" value="3"></center></td>
        <td id="td2"><center><input type="radio" name="aq4" value="2"></center></td>
        <td id="td2"><center><input type="radio" name="aq4" value="1"></center></td>
        <td id="td2"><center><input type="radio" name="aq4" value="0"></center></td>
      </tr>          
      <tr>
        <td id="td0"><center>5</center></td>
        <td id="td1" colspan="2"><font size="4.5px"><b>Communicates effectively and shows a sense of humor</font></b></td>
        <td id="td2"><center><input type="radio" name="aq5" value="5" required></center></td>
        <td id="td2"><center><input type="radio" name="aq5" value="4"></center></td>
        <td id="td2"><center><input type="radio" name="aq5" value="3"></center></td>
        <td id="td2"><center><input type="radio" name="aq5" value="2"></center></td>
        <td id="td2"><center><input type="radio" name="aq5" value="1"></center></td>
          <td id="td2"><center><input type="radio" name="aq5" value="0"></center></td>

      </tr>        
    </table>

        <table id="table1" style="background-color: #003152;">
      <tr  style="background-color: black">
        <td id="td0"><center><b>B</b></center></td>
        <td id="td0" colspan="1"><center><font size="5px"><b>INSTRUCTIONAL METHODS AND DELIVERY</b></center></td>
        <td id="td2"><b>Outstanding<br><br><center>5</center></b></td>
        <td id="td2"><b>Excellent<br><br><center>4</center></b</td>
        <td id="td2"><b>Very Good<br><br><center>3</center></b></td>
        <td id="td2"><b>Good<br><br><center>2</center></b></td>
        <td  id="td2"><b>Poor<br><br><center>1</center></b></td>
         <td  id="td2"><b><br><br><center>N/A</center></td>
      </tr>
      <tr>
        <td id="td0"><center>6</center></td>
        <td id="td1"><font size="4.5px"><b>Course objectives are cleary laid out and achieved</b></font></td>
        <td id="td2"><center><input type="radio" name="bq1" value="5" required></center></td>
        <td id="td2"><center><input type="radio" name="bq1" value="4"></center></td>
        <td id="td2"><center><input type="radio" name="bq1" value="3"></center></td>
        <td id="td2"><center><input type="radio" name="bq1" value="2"></center></td>
        <td id="td2"><center><input type="radio" name="bq1" value="1"></center></td>
          <td id="td2"><center><input type="radio" name="bq1" value="0"></center></td>
      </tr>
      <tr>
        <td id="td0"><center>7</center></td>
        <td id="td1"><font size="4.5px"><b>Focuses on syllabus, course outline/content and timeframe are followed; provides other opportunities for learning (fieldworkd, etc.)</b></td>
        <td id="td2"><center><input type="radio" name="bq2" value="5" required></center></td>
        <td id="td2"><center><input type="radio" name="bq2" value="4"></center></td>
        <td id="td2"><center><input type="radio" name="bq2" value="3"></center></td>
        <td id="td2"><center><input type="radio" name="bq2" value="2"></center></td>
        <td id="td2"><center><input type="radio" name="bq2" value="1"></center></td>
          <td id="td2"><center><input type="radio" name="bq2" value="0"></center></td>
      </tr>
      <tr>
        <td id="td0"><center>8</center></td>
        <td id="td1"><font size="4.5"><b>Textbook based but enriched by other resources. ( e.g. multi-media, internet, readings, research, etc.); to achieve a balance of theory and applications.</b></font></td>
        <td id="td2"><center><input type="radio" name="bq3" value="5" required></center></td>
        <td id="td2"><center><input type="radio" name="bq3" value="4"></center></td>
        <td id="td2"><center><input type="radio" name="bq3" value="3"></center></td>
        <td id="td2"><center><input type="radio" name="bq3" value="2"></center></td>
        <td id="td2"><center><input type="radio" name="bq3" value="1"></center></td>
         <td id="td2"><center><input type="radio" name="bq3" value="0"></center></td>
      </tr>
      <tr>
        <td id="td0"><center>9</center></td>
        <td id="td1"><font size="4.5px"><b>Allows participative atmosphere; student-focused teaching strategy ( e.g. I.T applications/multi-meadia, group dynamics, video screening, etc.) </b></font></td>
        <td id="td2"><center><input type="radio" name="bq4" value="5" required></center></td>
        <td id="td2"><center><input type="radio" name="bq4" value="4"></center></td>
        <td id="td2"><center><input type="radio" name="bq4" value="3"></center></td>
        <td id="td2"><center><input type="radio" name="bq4" value="2"></center></td>
        <td id="td2"><center><input type="radio" name="bq4" value="1"></center></td>
         <td id="td2"><center><input type="radio" name="bq4" value="0"></center></td>
      </tr>          
      <tr>
        <td id="td0"><center>10</center></td>
        <td id="td1"><font size="4.5px"><b>Feedbacks and assessments are given regularly and fairy. He/She complies with the grading system of the school and course requirements</b></font></td>
        <td id="td2"><center><input type="radio" name="bq5" value="5" required></center></td>
        <td id="td2"><center><input type="radio" name="bq5" value="4"></center></td>
        <td id="td2"><center><input type="radio" name="bq5" value="3"></center></td>
        <td id="td2"><center><input type="radio" name="bq5" value="2"></center></td>
        <td id="td2"><center><input type="radio" name="bq5" value="1"></center></td>
         <td id="td2"><center><input type="radio" name="bq5" value="0"></center></td>
        <input type="hidden" value="<?php echo $fn;?>" name="fn">
         <input type="hidden" value="<?php echo $sc;?>" name="sc">
          <input type="hidden" value="<?php echo $sn;?>" name="sn">
      </tr>        
    </table>
<br>

 <div class="comment">
        <textarea placeholder="Description..." cols="30" rows="5" class="comment" name="comment" type="submit" required ></textarea>
    </div>

    <br>
    <button class="button" type="submit" name="send_btn">Send</button>
    
         </form>
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
  $fn = $_POST['fn'];
  $sc = $_POST['sc'];
  $sn = $_POST['sn'];

 
// SQL Query To Fetch Complete Isnformation Of User
$name = $row['fullname'];
$sec = $row['section'];
$studid = $_SESSION['login'];


date_default_timezone_set("Asia/Manila");
$date = date('M d, Y');
// Create connection
 $conn = mysqli_connect("localhost", "root", "", "accounts");

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

$sql = mysqli_query($conn, "INSERT INTO evaluation (comment, aq1, aq2, aq3, aq4, aq5, bq1, bq2, bq3, bq4, bq5,total ,fullname, section, studentid, date, facultyname, subjectcode, subjectname)  
            VALUES('$comment','$aq1','$aq2','$aq3','$aq4','$aq5','$bq1','$bq2','$bq3','$bq4','$bq5','$average','$name','$sec','$studid','$date','$fn','$sc','$sn')");  
if ($sql) {
    // //may backup na na ginagawa, setup ka ng localhost nito. dito nalnag para dirediretso na save, mahirap mag debug sa live dib akkoi t? bakit? di ko nga alam kunrybasta gumana HAHA g may laman yung $fn di ko maita lahat, ganito din ba yung  query mo sa iba? oo lahat, eedit ko to ahhh g l,an gt kasi 1week na ko nababaliw dito
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

     
	<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="footer">
  <p>Copyright &copy 2019: Grade 11 TECH-VOC Information Communication Technology Students.</p>
</div>
</body>
</html>