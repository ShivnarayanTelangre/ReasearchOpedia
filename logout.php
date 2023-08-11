<?php

session_start();
        echo $_SESSION['email']; 
            
 
$_SESSION = array();
session_destroy();
header("location: login.html");

?>
