

<?php

$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'config.php';   
    $fullname= $_POST["full_name"];
    $profession = $_POST["profession"];
    $username = $_POST["email"]; 
    $password = $_POST["password"]; 
    $cpassword = $_POST["cpassword"];
            
    
    $sql = "Select * from register where email='$username'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    if($num == 0) {
        if(($password == $cpassword) && $exists==false) {
    
            $hash = password_hash($password, 
                                PASSWORD_DEFAULT);
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO register (email, 
                password,date,full_name,profession) VALUES ('$username', 
                '$hash',current_timestamp(),'$fullname','$profession')";
    
            $result = mysqli_query($conn, $sql);
			
            if ($result) {
                $showAlert = true;
               
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
          
        }      
    }// end if 
    
   if($num>0) 
   {
      $exists="Username not available";
     
   } 
    
}//end if   
    
if($showAlert) {
    
    echo ' <div class="alert alert-success 
        alert-dismissible fade show" role="alert">

        <strong>Success!</strong> Your account is 
        now created and you can login. 
        <button type="button" class="close"
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
            

        </button> 
    </div> '; 
}

if($showError) {

    echo ' <div class="alert alert-danger 
        alert-dismissible fade show" role="alert"> 
    <strong>Error!</strong> '. $showError.'

   <button type="button" class="close" 
        data-dismiss="alert aria-label="Close">
        <span aria-hidden="true">×</span> 
   </button> 
 </div> '; 
}
    
if($exists) {
    echo ' <div class="alert alert-danger 
        alert-dismissible fade show" role="alert">

    <strong>Error!</strong> '. $exists.'
    <button type="button" class="close" 
        data-dismiss="alert" aria-label="Close"> 
        <span aria-hidden="true">×</span> 
    </button>
   </div> '; 
 }

?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In / Sign Up </title>
  <link rel="icon" href="paper.ico">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
<link rel="stylesheet" href="./login-style.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<body><img src="images/mit-header.png" class="img"  >
		<header>
		  <nav class="navbar">
		  <ul>
			<Li><a href="home.html">Home</a></Li>
			<!-- <Li><a href="#">contact</a></Li> -->
			<Li><a href="aboutUs.html">About us</a></Li>
		  </ul>
		</nav>
	</header>
<div class="shiv">
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<form action="login.php"method="post">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											
											<h4 class="mb-4 pb-3">Log In</h4>
                                                                                       
											<div class="form-group">
												<input type="email" name="email" class="form-style" placeholder="Your Email" id="email" autocomplete="off"required>
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" id="password" autocomplete="off"required>
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											
											<a href="about.php">
										    <button type="submit" class="btn btn-primary">submit</button>
										</a>
                            				<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
				      					</div>
									
										  <p >if you have not account please sign up then login</p>
			      					</div>
			      				</div>
							</form>
								<div class="card-back">
									<form action="register.php" method="post">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Sign Up</h4>
											<div class="form-group">
												<input type="text" name="full_name" class="form-style" placeholder="Your Full Name" id="full_name" autocomplete="off"required>
												<i class="input-icon uil uil-user"></i>
											</div>	
                                                                                       
											<div class="form-group mt-2">
											
													<label for="profession">profession:-</label>
												<input type="radio" id="Teacher" name="profession" id="Teacher" value="Teacher"required>
												<label for="Teacher">Teacher</label>
												<input type="radio" id="Student" name="profession" id="Student" value="Student">
												<label for="Student">Student</label>
											
											</div>
											<div class="form-group mt-2">
												<input type="email" name="email" class="form-style" placeholder="Your Email" id="email" autocomplete="off"required>
												<i class="input-icon uil uil-at"></i>
											</div>
											
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" id="password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<div class="form-group mt-2">
												<input type="cpassword" name="cpassword" id="cpassword" class="form-style" placeholder="confirm_Password" id="cpassword"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											 <button type="submit" class="btn btn-primary">submit</button>
                                                                                      
										</form>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</div>


</body>
</html>


    