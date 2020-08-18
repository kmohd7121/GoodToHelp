<?php

session_start();
if(!isset($_SESSION['uname']))
header('location:http://localhost/GH/login.html');
$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$conn=mysqli_connect('localhost','root','','good_heart');
error_reporting(0);
$username=$_SESSION['uname'];
$p="update donar_info set name='$name',gender='$gender',email='$email',address='$address',contact='$contact' where username='$username'";
$get=mysqli_query($conn,$p);
if($get)
{
echo "<script>alert('your profile updated')</script>";
echo "<script>window.open('profile.php','_self')</script>";


}

?>