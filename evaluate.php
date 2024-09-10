<!DOCTYPE html>
<html >
<title>Evaluation System</title>
<head>	<link rel="icon" type="image/png" href="images/logo.png"/></head>
<body>
<style type="text/css">
       body{
      margin: 0px;
      background: url(images/sbg1.jpg);
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
ul {  
  list-style-type: none;
  padding: 5px; 
  overflow: hidden;
  background-color: black;
  padding: 0px;
  justify-content: space-around;
  display: flex;
  font-size: 25px;
  width: 100%;
}
  li a{
  display: inline-block;
  color: white;
  text-align: center;
  padding: 10px;
  text-decoration: none;
}

.nav{
  font-family: Prime;
  text-align:center;
  text-transform:uppercase;
  font-weight: 500px;
  letter-spacing: 1px;
  margin-top: -.3%;
}

.nav *{
  box-sizing: border-box;
  transition: all 0.35s ease;
}

.nav li {
  display: inline-block;
  list-style: outside none none;
  margin: .5em 1em;
  padding: 0;
}

.nav a {
  padding: 5px 5px;
  color: rgba(255, 255, 255,0.5);
  position: relative;
  text-decoration: none;
  font-size: 20px;
}

.nav a:before,
.nav a:after {
  height:14px;
  width: 14px;
  position: absolute;
  content: '';
  transition: all 0.35s ease;
  opacity: 0;
}

.nav a:before {
  right: 0;
  top: 0;
  border-right: 3px solid red;
  border-top: 3px solid red;
  transform: translate(-100%, 50%);
}

.nav a:after {
  left: 0;
  bottom: 0;
  border-left: 3px solid red;
  border-bottom: 3px solid red;
  transform: translate(100%, -50%);
}

a:hover:before,
a:hover:after {
  transform: translate(0%, 0%);
  opacity: 1;
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
table {
  border-collapse: collapse;
  width: 95%;
  margin-left: 2.5%;
  margin-bottom: 5%;
}
.tr:hover{
	border-left: 3px solid #003152;
	background-color: green;
}
th, td{
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid ;
}
.tr1{
	background-color: #003152;
	border-bottom: none;
  color: white;
}
.i1{
 background-color: #4CAF50; 
 margin-bottom: 3%;
 cursor: pointer;
 padding: 10px;
 width: 15%;
 font-size: 20px
}


 </style>

<header>
   <img id="mg1" src="images/header.png" width="100%">
</header>

<ul class="nav">
  <li><a href="index.php">Profile</a></li>
  <li><a href="evaluate.php">Evaluate</a></li>
  <li><a href="about.php">About Us</a></li>
</ul>

<br>
<br>
<table style="background-color: rgba(0, 0, 0, 0.37); font-size: 20px; color: white;">
	<tr>
		<th>Semester: 2nd </th>
		<th>Date:</th>
	</tr>
	<tr>
		<th>Strand: </th>
		<th>Section: </th>
	</tr>
</table>
<br>
<?php
include('eval_chk.php');
?>
<form method="POST">
	<center><input class="i1" type="submit" name="submit"></center>	
<table style="background-color: rgba(0, 0, 0, 0.37); color:white; font-size: 20px;">
  <tr class="tr1">
    <th>Choose</th>
    <th>Subject Code</th>
    <th>Subject</th>
    <th>Units</th>
  	<th>Faculty Name</th>
  	<th>Status</th>
  </tr>
  <tr class="tr">
    <td><input type="radio"  value="THEO 2" name="eval"></td>
    <td>THEO 2</td>
    <td>Christian Community</td>
    <td>(36)</td>
    <td>Charles, Joy Kiran Paul</td>
    ?>
    </td>
  </tr>
  <tr class="tr">
    <td><input type="radio" value="ICT 2" name="eval"></td>
    <td>ICT 2</td>
    <td>Computer Programming</td>
    <td>80</td>
    <td>Mercado, Mark Anthony S.</td>
  </tr>
  <tr class="tr">
    <td><input type="radio" value="ICT 4" name="eval"></td>
    <td>ICT 4</td>
    <td>Computer System Servicing II</td>
    <td>80</td>
    <td>Mercado, Mark Anthony S.</td>
  </tr>
  <tr class="tr">
    <td><input type="radio" value="ICT 6" name="eval"></td>
    <td>ICT 6</td>
    <td>Database II</td>
    <td>80</td>
    <td>Mercado, Mark Anthony S.</td>
  </tr>
    <tr class="tr">
    <td><input type="radio" value="EMTECH" name="eval"></td>
    <td>EMTECH</td>
    <td>Empowerment Technologies</td>
    <td>80</td>
    <td>Mercado, Mark Anthony S.</td>
  </tr>
    <tr class="tr">
    <td><input type="radio" value="ENG" name="eval"></td>
    <td>ENG</td>
    <td>English for Academic and Professional Purposes</td>
    <td>80</td>
    <td>Dizon, Denise B.</td>
  </tr>
    <tr class="tr">
    <td><input type="radio" value="MIL" name="eval"></td>
    <td>MIL</td>
    <td>Media & Information Literacy</td>
    <td>80</td>
    <td>Dela Cruz, Patricia Monette G.</td>
  </tr>
    <tr class="tr">
    <td><input type="radio" value="PE 2" name="eval"></td>
    <td>PE 2</td>
    <td>Physical Education and Health 2 </td>
    <td>20</td>
    <td>Ocampo, Angeline D.</td>
  </tr>
    <tr class="tr">
    <td><input type="radio" value="PHYSCI" name="eval"></td>
    <td>PHYSCI</td>
    <td>Physical Science (Integrated Lec. and Lab.)</td>
    <td>80</td>
    <td>Espinocilla, Kevin B.</td>
  </tr>
    <tr class="tr">
    <td><input type="radio" value="PRES 1" name="eval"></td>
    <td>PRES 1</td>
    <td>Practical Research 1</td>
    <td>80</td>
    <td>Hasegawa, Giselle E.</td>
  </tr>
    <tr class="tr">
    <td><input type="radio" value="MATH 2" name="eval"></td>
    <td>MATH 2</td>
    <td>Statistics and Probability</td>
    <td>80</td>
    <td>Miñon, Alexandra H.</td>
  </tr>
</table>
</form>

<br><br>

<div class="footer">
  <p>Copyright &copy 2019: Grade 11 TECH-VOC Information Communication Technology Students.</p>
</div>
</body>
</html>