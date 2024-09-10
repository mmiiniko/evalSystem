
<!DOCTYPE html>
<html>
<title>LCCM-EFP</title>
<head>
    	<link rel="icon" type="image/png" href="images/logo.png"/>
</head>
<body>
<style type="text/css">
	body{
 			margin: 0px;
      background-image: url(images/isa.jpg);
      background-size: cover;
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
    .box{
  width: 50%;
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
a{
  text-decoration: none;
}

</style>
	
<header>
   <img id="mg1" src="images/header.png" width="100%">
</header>


<div>
<ul class="nav">
  <li><a href="index.php" active>Profile</a></li>
    <li><a href="evaluate.php">Evaluate</a></li>
    <li><a href="about.php">About Us</a></li>
</ul>
</div>

<div id="header" class="box">
<br>
<br>
<div>
  <center>
<header>
      
<img src='images/nur.png' width='20%' height='20%' >

</header>

    <br>
			<strong style="color: white; font-size: 30px;"><?php echo 'Username'; ?></strong>
            <small>
        <i  style="color: white; font-size: 20px;">(<?php echo 'Year and Section'; ?>)</i> 
      </small>
        <br>
        <strong  style="color: white; font-size: 30px;"></strong>
        <strong  style="color: white; font-size: 30px;"></strong>  
        <strong  style="color: white; font-size: 30px;"></strong> 
        <br>
       
        <br>
        <br>
        <a href="login.php" style="color: white; background-color: #f44336; padding: 10px; font-size: 20px;
        border-radius: 10px;">Logout</a>
        </center>

      	<br>
				</small>
				<?php
				
				
				?>
	</div>

</div>

<div class="footer">
  <p>Copyright &copy 2019: Grade 11 TECH-VOC Information Communication Technology Students.</p>
</div>

</body>
</html>