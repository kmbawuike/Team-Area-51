<?php
// Init + Start session



// Redirect users to the login page if not signed in

?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome |HNG Intership</title>

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
		<h1> TEAM AREA 51</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
			
            <h1>
      Successfully Signed In!
    </h1>
    <div class="bottom">
						<button class="btn" onclick="logout()">Log Out</button>
					</div>
    

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