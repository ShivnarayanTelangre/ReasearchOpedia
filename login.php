<?php
session_start();

$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $username = $_POST["email"];
    $password = $_POST["password"]; 
    $_SESSION['success'] = "";

    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from register where email='$username'";
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result);
    
    if ($num == true){
        
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['password'])){ 
                $login = true;
                
                $_SESSION['login'] = true;
                $_SESSION['email'] = $username;
                
                header("location: welcome.php");
            } 
            else{
                 $showError = "Invalid Credentials";
                header("location: register.php");
            }
            
        }
        
    }
     else{
            $showError = "Invalid Credentials";
           header("location: register.php");
            }
    
   
}
    
?>
