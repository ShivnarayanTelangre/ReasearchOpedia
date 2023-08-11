<?php
require_once "config.php";

$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "email cannot be blank";
    }
    else{
        $sql = "SELECT sr-num  FROM register WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set the value of param username
            $param_email = trim($_POST['email']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken"; 
                }
                else{
                    $email = trim($_POST['email']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);
// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($email_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO register (email, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);

        // Set these parameters
        $param_email = $email;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>



