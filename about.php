<?php
include("config.php"); session_start();
$userprofile = $_SESSION["email"];
if($userprofile==true){

}
else{
  header('location:home.html');
}
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>welcome</title>
  <link rel="icon" href="paper.ico">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'><link rel="stylesheet" href="./style.css">
<style>
.dropbtn {
  background-color: rgb(0 0 0 / 62%);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.container{
  height:400px;
  border:2px solid red;
  width:400px;

  
}
.login{
  float:right;
}
.dropbtn1{
  background-color:rgb(21 21 21 / 0%);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown-content a {
  color: black;
  padding: 0px 70px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body><img src="images/mit-header.png" width="100%" height="150px">
  <form action="" method="post">
<header>
<nav class="navbar">

<Li><a href="home.html">Home</a></Li>
<Li><a href="aboutUs.html">About us</a></Li>
<div class="dropdown" style="padding-left: 800px">
<button class="dropbtn1"><img src="iconprofile.png" width="25" height="15"></button>
<div class="dropdown-content">
<a href="logout.php">Logout</a>
<a href="#"><?php
                   
                    echo $_SESSION['email'];
 ?></a>

</div>
</div>

</nav>

</header>

<div class="box";>
<h3 style="color:white;text-align: center;">welcome to our MIT college website.<br>if you want to see research paper published by particular faculty <br>
  please select your department       <br> <br>
  <div class="dropdown">
  <button class="dropbtn">Department</button>
  <div class="dropdown-content">
    <a href="cse.php"><h5>Computer science engineering</h5></a>
    <a href="AIDS.php"><h5>Artifitial intiligence and Data science</h5></a>
    <a href="ETC.php"><h5>Electronics and Telecomunication</h5></a>
  </div>
</div>
</h3>
</form>
</div>
</div>
</body>
</html>
