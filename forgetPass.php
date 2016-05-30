<?php

$user = 'root';
$pass = 'Pass';
$db_name = 'svv';

$db = new mysqli('localhost',$user,$pass,$db_name) or die("Connection failed");

if(isset($_POST['submit']))
{
	$password = $_POST['pass'];
  $username = $_POST['usr'];


  $sql = "UPDATE user SET password = '".$password."' WHERE UserID ='".$username."'";


if (mysqli_query($db, $sql)) {
   echo "Record updated successfully";
	 header("Location: loginPage.php");
} else {
   echo "Error updating record: " . mysqli_error($db);
}

mysqli_close($db);

	}
?>
