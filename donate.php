<?php
if(isset($_POST["submit"]))
{
$name=$_POST['name'];
$username=$_POST['uname'];
$password=$_POST['pswd'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$conn=mysqli_connect('localhost','root','','good_heart');


$q="insert into donar_info(name,username,password,gender,email,address,contact) values('$name','$username','$password','$gender','$email','$address','$contact')";
$result=mysqli_query($conn,$q);



if($result)
    {
     echo '<script>alert("you have successfully registered");</script>';

?>

<!DOCTYPE html>
    <html>
    <head>

     <title>Donate</title>
     <meta charset="utf-8">

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
            .home_banner_area {
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(./images/called4.jpg);
            }
        </style>
    </head>
<body>
        
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
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
                                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li> 
                                <li class="nav-item active"><a class="nav-link" href="about-us.html">About</a></li> 
                                <li class="nav-item"><a class="nav-link" href="causes.html">Causes</a>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="events.html">Events</a>
                                        <li class="nav-item"><a class="nav-link" href="event-details.html">Event Details</a> 
                                        
                                    </ul>
                                </li> 
                               <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            </ul>
                        </div> 
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->
        
    <!--================ Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Donate</h2>
                    <p>Remember it’s only waste if you waste it.</p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->


<section class="causes_area">
        <div class="container">
            <div class="main_title">
                <h2>Items you can donate</h2>
                            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_causes">
                        <h4>Clothes</h4>
            <img src="./images/donate_box.jpg" alt="" width="85%" height="30%">
            <p>So, you’re ready to clean out your closet. You have a lot of clothes that you don’t wear anymore, and you’re ready to revamp your wardrobe. While you’re doing that, you’re probably wondering what you’re going to do with all the old clothes.</p>
            <a href="donate1.php" class="btn btn-success">Donate</a>
    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_causes">
                        <h4>Toys</h4>
            <img src="./images/toys2.jpg" alt="distribute" width="85%" height="30%">
            <p>Your children has grown up now what will you do with their old toys. Donate them so that other children like your's can play with them.</p>
            <a href="donate1.php" class="btn btn-success">Donate</a>
    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_causes">
                         <h4>Furniture</h4>
            <img src="./images/luggage.jpg" alt="" width="85%" height="
            30%">
            <p>Even though you don’t want your old clothes anymore, it’s almost guaranteed that someone else will. There are many people in need of usable clothing. There are disaster victims, underprivileged people, and children in need of clothing, and your donations can help.</p>
            <a href="donate1.php" class="btn btn-success">Donate</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_causes">
                        <h4>Books</h4>
            <img src="./images/books1.jpg" alt="" width="85%" height="30%">
            <p>So, you’re ready to clean out your closet. </p>
            <a href="donate1.php" class="btn btn-success">Donate</a>
    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_causes">
                        <h4>Blankets</h4>
            <img src="./images/blanket1.jpg" alt="distribute" width="85%" height="30%">
            <p>Your children has grown up now what will you do with their old toys. Donate them so that other children like your's can play with them.</p>
            <a href="donate1.php" class="btn btn-success">Donate</a>
    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_causes">
                         <h4>School Supplies</h4>
            <img src="./images/school.jpg" alt="" width="85%" height="
            30%">
            <p>Even though you don’t want your old clothes anymore</p>
            <a href="donate1.php" class="btn btn-success">Donate</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_causes">
                        <h4>Houseware</h4>
            <img src="./images/houseware.jpg" alt="" width="85%" height="30%">
            <p>So, you’re ready to clean out your closet. </p>
            <a href="donate1.php" class="btn btn-success">Donate</a>
    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_causes">
                        <h4>Sports</h4>
            <img src="./images/sports.jpg" alt="distribute" width="85%" height="30%">
            <p>Your children has grown up now what will you do with their old toys. Donate them so that other children like your's can play with them.</p>
            <a href="donate1.php" class="btn btn-success">Donate</a>
    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_causes">
                         <h4>Woolen</h4>
            <img src="./images/woolen.jpg" alt="" width="85%" height="
            30%">
            <p>Even though you don’t want your old clothes anymore</p>
            <a href="donate1.php" class="btn btn-success">Donate</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--================ End Causes Area =================-->

 <!--================ Start footer Area  =================-->   
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row section_gap">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title large_title">Our Mission</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. 
                            </p>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Quick Links</h4>
                             <ul class="list">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="causes.html">Causes</a></li>
                                <li><a href="events.html">Event</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h4 class="footer_title">Gallery</h6>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="img/gallery/g1.jpg" alt=""></li>
                                <li><img src="img/gallery/g2.jpg" alt=""></li>
                                <li><img src="img/gallery/g3.jpg" alt=""></li>
                                <li><img src="img/gallery/g4.jpg" alt=""></li>
                                <li><img src="img/gallery/g5.jpg" alt=""></li>
                                <li><img src="img/gallery/g6.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Contact Us</h4>
                            <div class="ml-40">
                                <p class="sm-head">
                                    <span class="fa fa-location-arrow"></span>
                                    Head Office
                                </p>
                                <p>123, Main Street, Your City</p>
    
                                <p class="sm-head">
                                    <span class="fa fa-phone"></span>
                                    Phone Number
                                </p>
                                <p>
                                    +123 456 7890 <br>
                                    +123 456 7890
                                </p>
    
                                <p class="sm-head">
                                    <span class="fa fa-envelope"></span>
                                    Email
                                </p>
                                <p>
                                    free@info.com <br>
                                    www.goodtohelp.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
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
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>





<?php
    }
else
  {
    
    echo '<script>alert("registeration failed");</script>';
    header('location:http://localhost/GH/register.html');


  }



}
?>
