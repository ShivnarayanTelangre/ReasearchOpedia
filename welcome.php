<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: about.php");
    exit;
}
?>
<?php

 echo $_SESSION['full_name']

?>
