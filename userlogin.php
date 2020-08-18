<?php
session_start();
$username=$_POST['uname'];
$password=$_POST['pswd'];
$conn=mysqli_connect('localhost','root','','good_heart');


$q="select * from donar_info where username='$username' && password='$password'";
$result=mysqli_query($conn,$q);
if($result)
{
	echo "<alert>you have login</alert>";

}
else
{
	echo "<alert>something wrong</alert>";
}
$num=mysqli_num_rows($result);


if($num==1)
		{
			$_SESSION['uname']=$username;
			header('location:http://localhost/GH/profile.php');
		}
else
	{
		
		header('location:http://localhost/GH/login.html');

	}

?>