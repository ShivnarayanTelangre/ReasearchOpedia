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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSE_department</title>
    <link rel="stylesheet" href="./style.css">
    <style>
/* .dropbtn {
  background-color: rgb(0 0 0 / 62%);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
} */

.dropdown {
  position: relative;
  display: inline-block;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  /* min-width: 160px; */
  /* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); */
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
.dropbtn{
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

/* .dropdown-content a:hover {background-color: #ddd;} */

.dropdown:hover .dropdown-content {display: block;}

/* .dropdown:hover .dropbtn {background-color: #3e8e41;} */
</style>

</head>
<body><img src="images/mit-header.png" width="100%" height="150px">
  <form action="" method="post">
<header>
<nav class="navbar">

    <Li><a href="home.html">Home</a></Li>
    <Li><a href="#">About us</a></Li>
    <div class="dropdown" style="padding-left: 800px">
    <button class="dropbtn"><img src="iconprofile.png" width="25" height="15"></button>
    <div class="dropdown-content">
    <a href="logout.php">Logout</a>
    <a href="#"><?php
                        
                    echo"welcome_";
                        echo $_SESSION['email'];
     ?></a>

</div>
</div>

</nav>
</header>


  <h1 style="color:white;text-align:center;
    background-color: rgb(0 0 0 / 50%);"> Welcome to Computer science engineering department</h1>
  <div class="container">
<ol>
<Li><a style="text-decoration:none;color:red" href="https://drive.google.com/file/d/18q28ckBFAMh93CUGj5m6zkNfaURJNs-2/view?usp=drivesdk">Dr.B S Sonawane</a></Li>
<Li><a style="text-decoration:none;color:red"href="https://drive.google.com/file/d/1uvGwE8bzMUnSZpMzWWThBpChoKtrxfxF/view?usp=share_link">Ms.S Deshmukh</a></Li>
</ol>
</div>
</body>
</html>
<style>
  .container{
    height:400px;
    width:300px;
   background-color:white;
   color:black;
   text-decoration:None;
  }
  .container li{
    text-decoration:none;
    color:black;

  }
  
  </style>
