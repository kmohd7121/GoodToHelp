<?php

session_start();
if(!isset($_SESSION['uname']))
header('location:http://localhost/GH/login.html');
$conn=mysqli_connect('localhost','root','','good_heart');
error_reporting(0);
$username=$_SESSION['uname'];
$get=mysqli_query($conn,"select * from donar_info where username='$username'");
$result=mysqli_fetch_assoc($get);
$name=$result['name'];
?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Profile</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <style type="text/css">

        	        </style>
    </head>
<body>
       
	<!--================ Start Header Menu Area =================-->
	<header class="header_area" style="background-color: #777777;">
		<div class="main_menu">
			<div class="container" style="margin-left: 60px;">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"></a>
						<div>
          					<h2 class="title" style="color: #fff;">Good To Help</h2>
          					<h6 class="text text-success">Used Batter To Good Use</h6>
        				</div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
								<li class="nav-item active"><a class="nav-link" href="userlogout.php">Logout</a></li> 
								<li class="nav-item active"><a class="nav-link" href="edit.php">Edit Profile</a></li> 
							</ul>
						</div> 
					</div>
				</nav>
			</div>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->
	
	<!--================ Home Banner Area =================-->
	<!--================ End Home Banner Area =================-->










<section class="team_area section_gap">
		<div class="container">
			<div class="main_title">
				<h2>Profile Info</h2>
				<p>Creepeth called face upon face yielding midst is after moveth </p>
			</div>
			<div class="row team_inner">
				<div class="col-lg-3 col-md-6">
			
					
<div class="container">
  <div class="card" style="width:300px;">
    <img class="card-img-top" src="./images/user.png" alt="Card image" style="width:80%">
    <div class="card-body">
      <h4 class="card-title">Name:<?php echo " ".$name; ?></h4>
      <p class="card-text"><p>Gender:<?php echo " ".$result['gender']; ?></p>
							<p>Email:<?php echo " ".$result['email']; ?></p>
							<p>Address:<?php echo " ".$result['address']; ?></p>
							<p>Contact:<?php echo " ".$result['contact']; ?></p></p>
      <a href="edit.php" class="btn btn-primary">Edit Profile</a>
    </div>
  </div>
</div>

			
				</div>

				<div class="col-lg-6 col-md-10">
					<div class="team_item">
						<h3>User donation details</h3>
						<p>value to be fetched from database</p>


					</div>
				</div>



		
			</div>
		</div>
	</section>
	<!--================End Team Area =================-->
	












<!--================ Start footer Area  =================-->	
	
		<div class="footer-bottom" style="background-color: #777777;">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart-o" aria-hidden="true"></i> by ASP

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->
	
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/countdown.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>
</html>















</body>
</html>