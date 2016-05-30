<?php

$user = 'root';
$pass = 'Pass';
$db_name = 'svv';

$db = new mysqli('localhost',$user,$pass,$db_name) or die("Connection failed");

session_start();

if(isset($_SESSION['user'])!="")
{
	header("Location: loginPage.php");
}

if(isset($_POST['submit']))
{
	$uname = $_POST['Username'];
	$upass = $_POST['Password'];


	$res=mysqli_query($db,"SELECT userID, password FROM user WHERE UserID='".$uname."' and password = '".$upass."'");

	$row=mysqli_fetch_array($res);

	$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row

	if($count == 1)
	{
		$_SESSION['user'] = $row['userID'];
		header("Location: downloadPage.php");
	}
	else
	{
        echo"<script>alert('Username / Password Seems Wrong !');</script>";
	}

}
?>
