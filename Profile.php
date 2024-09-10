<?php include('functions.php');
if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
} 
?>
<!DOCTYPE html>
<html>
<title></title>
<head></head>
<body>
<style type="text/css">
  body{
      margin: 0px;
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

  header{
  background-color: #1f4996;
  color: white;
  font-size: 70px;
  text-shadow: 10px 3px black;
  margin-bottom: 0%;
}
  #mg1{
  height: 150px;
  width: 250px;
}
  .para1{
  float: right;
  color: white;
  margin-right: 160px;
  font-family: Old English Text MT;
  border-bottom: 2px solid black;
  margin-bottom: 0%;
  margin-top: 40px;
}
  ul {  
  list-style-type: none;
  margin: 0%;
  padding: 0px; 
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
  padding: 6px;
  text-decoration: none;
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
   <img id="mg1" src="lccm.jpg" height="100px" width="150xp;">
   <p class="para1">La Consolacion College Manila</p>
</header>

<ul>
  <li><a href="Profile.php">Profile</a></li>
  <li><a href="Evaluate.php">Evaluate</a></li>
  <li><a href="About.php">About Us</a></li>  
</ul>
<br>
<br>

<div>
    <?php  if (isset($_SESSION['user'])) : ?>
      <strong><?php echo $_SESSION['user']['username']; ?></strong>

      <small>
        <br>
        <br>
        <br>
        <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
        <br>
        <a href="index.php?logout='1'" style="color: red;">Logout</a>
        </small>
        <?php
        
        
        ?>
    <?php endif ?>
  </div>



<div class="footer">
  <p>Copyright &copy 2019: Grade 11 TECH-VOC Information Communication Technology Students.</p>
</div>
</body>
</html>