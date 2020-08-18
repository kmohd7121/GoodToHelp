<?php
$conn=mysqli_connect('localhost','root','','good_heart');
error_reporting(0);
if(isset($_POST["insert"]))
{
    $name=$_POST['pname'];
    $qty=$_POST['qty'];
    $f=$_FILES['image'];
    $filename=mysqli_real_escape_string($_FILES["image"]["tmp_name"]);
    $filedata=mysqli_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));

   
    $query="insert into stuff_details(name,image,quantity) values('$name','$f','$qty')";
    if(mysqli_query($conn,$query))
    {
         move_uploaded_file($f['tmp_name'], "photos/".$f['name']);
        echo '<script>alert("image inserted into database");</script>';
    }
    else
    {
         echo '<script>alert("image not inserted into database");</script>';
    }
}
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
            <div class="container"  style="margin-left: 60px;">
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


 <!--=================product details starts ===============-->
 <div class="container col-md-4" >
  
  <br><br><br>
  <div class="card" >
    <div class="card-body">
        <h1 class="card-title" style="text-align: center;">Stuff Details</h1>
  <form method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="pname"><h3>Stuff Name:</h3></label>
      <input type="text" class="form-control" id="pname" placeholder="Enter name" name="pname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="qty"><h3>Quantity:</h3></label>
      <input type="number" class="form-control" id="qty" placeholder="Enter quantity" name="qty" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="image"><h3>Stuff Pic:</h3></label>
      <input type="file" class="form-control col-lg-6" name="image" id="image" placeholder="upload picture" />                 
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <input type="submit" name="insert" id="insert" class="btn btn-success" style="margin-top: 20px;float: left;" value="Donate" />
  </form>
    </div>
    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th>Image</th>
    </tr>
    <?php
    $query="select * from stuff_details";
    $result=mysqli_query($conn,$query);
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<tr>
                <td>
                    <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" />
                </td>
                </tr>';
    }


    ?>
    
</table>



    
<!--=================product details ends ================-->
<!--==========================javascript=========-->
<script>



$(document).ready(function(){
    $('#insert').click(function(){
        var image_name=$('#image').val();
        if(image_name=='')
        {
            alert("Please select image");
            return false;
        }
        else
        {
            var extension=$('#image').val().split('.').pop().toLowerCase();
            if(jQuery.inArray(extension,['gif','png','jpg','jpeg'])== -1)
            {
                alert("Invalid image file");
                $('#image').val('');
                return false;
            }
        }
    })
})
</script>













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