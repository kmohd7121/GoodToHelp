
<?php
session_start();
$conn=mysqli_connect('localhost','root','','good_heart');
error_reporting(0);
$username=$_SESSION['uname'];
$get=mysqli_query($conn,"select * from donar_info where username='$username'");
$result=mysqli_fetch_assoc($get);
$name=$result['name'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit profile</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        
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
                    <h2 class="title" style="color: #fff;">Good Heart</h2>
                    <h6 class="text text-success">Used Goods To Good Use</h6>
                </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
              
                <li class="nav-item active"><a class="nav-link" href="userlogout.php">Logout</a></li> 
              
              </ul>
            </div> 
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--================ End Header Menu Area =================-->

<div class="container col-md-6">
 <br><br><br>
  <div class="card">
    <div class="card-body" style="background-color: #60bc0f;">
        <h1 class="card-title" style="text-align: center;">Enter your new details</h1>
   <br><br>
  <form action="update.php" method="post" class="needs-validation" novalidate>
    <div class="form-group">
        <div class="form-group">
      <label for="name"><h4>Name:</h4></label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
</div>
    <div class="form-group">
        <label for="radio"><h4>Gender:</h4></label>
        <div>
            <label class="radio-inline" for="radio">
            <h4><input type="radio" name="gender" value="female" id="radio">Female</h4></label>
            <label class="radio-inline" for="radio1" style="margin-left: 5px;">
            <h4><input type="radio" name="gender" value="male" id="radio1">Male</h4></label>
        </div>
    </div>
    <div class="form-group">
      <label for="email"><h4>Email:</h4></label>
      <input type="email" class="form-control" name="email" id="email" placeholder="someone@example.com" required />
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="address"><h4>Address:</h4></label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="contact"><h4>Contact:</h4></label>
      <input type="number" class="form-control" id="contact" placeholder="Enter contact" name="contact" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required>check me out.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
    </div>
  </div>
</div>





<footer>
        
        <div class="footer-bottom"  style="background-color: #888888">
            <div class="container">
                <div class="row d-flex">
                    <p class="col-lg-12 footer-text text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by ASP
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

</body>
</html>
