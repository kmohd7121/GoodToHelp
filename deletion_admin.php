<?php
session_start();
error_reporting(0);
$size=sizeof($_POST);
$j=1;
for($i=1; $i<=$size; $i++, $j++)
 { 
	$index="d".$j;
	if (isset($_POST[$index]))
	 {

		$b_id[$i]=$_POST[$index];
	}
			else
			{
				$i--;
			}
}

for($k=1;$k<=$size;$k++)
{
$conn=mysqli_connect('localhost','root','','good_heart');
$q="delete from admin where id=".$b_id[$k];
mysqli_query($conn,$q);
}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body
		{
			margin: 0px;
			border: 0px;

		}
		#header{
			width: 100%;
			height: 140px;
			background-color: #2c3e50;
			color: white;
		}
		#sidebar{
			width: 300px;
			height: 400px;
			background-color:#34495e ;
			float: left;
		}
		#data{
			height: 700px;
			background-color: #ecf0f1;
		}
		#adminlogo{
			height: 100px;
			width: 100px;
			background: white;
			border-radius: 100px;
		}
		ul li{
			padding: 20px;
			border-bottom: 2px solid grey;
			
		}
		ul li a{
			color: white;
		}
		ul li:hover{
			background: #bdc3c7;
			color: black;
		}
	</style>
</head>
<body>
	<div id="header">
		<center><img src="./images/admin.png" alt="adminlogo" id="adminlogo"><br>
			<h3 style="margin-top: 5px;">This is Admin Panel, Please proceed with caution.</h3>
		</center>
	</div>
		<div id="sidebar">
			<ul>
				<li><a href="viewdetails.php">View data</a></li>
				<li><a href="add.php">Add data</a></li>
				<li><a href="update.php">Update data</a></li>
				<li><a href="delete.php">Delete data</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		
	</div>
		<div id="data">
			<br>
			<center><h2>Hello, <?php echo $size."records deleted"; ?></h2>
</center>
		
	</div>


</body>
</html>