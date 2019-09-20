
<?php
require 'conn.php';
//session_start();


$ema=$pass=$err="";

if(isset($_POST['register'])){
    require("register_user.php");
    }


?>

<!DOCTYPE html>
<html>
<head>
<title>Register |HNG Intership</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body>

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>Register</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
			

				<form action="register.php" method="post" id="login-form" >

					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="email" name="email" id="login-email" placeholder="Email Address" />
						
					</div>
					<span style="color:red; font-size:25px"><?php echo $ema; ?></span>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password"  name="password" id="login-password" placeholder="Password" />
						
					</div>
					<span style="color:red; font-size:25px"><?php echo $pass; ?></span>

                    <div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password"  name="pass" id="login-password1" placeholder="Confirm Password" />
					
					</div>
					<span style="color:red; font-size:25px"><?php echo $err; ?></span>
                    
					<div class="bottom">
						<button class="btn" name="register"> Sign Up</button>
					</div>
					<div class="links">
						<!-- <p><a href="#">Forgot Password?</a></p> -->
						<p class="right"><a href="index.php">Already have an account? Login</a></p>
						<div class="clear"></div>
					</div>
				</form>	
			</div>
			
		</div>
		
		<!-- copyright -->
		<div class="copyright">
			<p> &copy; <?php echo date("Y"); ?> HNG Intership Login Form . All rights reserved | Design by Team Area 51</p>
		</div>
		<!-- //copyright --> 
	</div>
</div>	
<!-- //main -->
<script src="login.js"></script>


</body>
</html>