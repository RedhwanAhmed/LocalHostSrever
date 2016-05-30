<?php
$user = 'root';
$pass = 'Pass';
$db_name = 'svv';

$db = new mysqli('localhost',$user,$pass,$db_name) or die("Connection failed");

if (!(isset($_SESSION['user']) && $_SESSION['user'] != '')) {

	Echo"<script language = 'Javascript'>
	alert('you have to sign in to view this page !!!')
	location.href = 'loginPage.php'
</script>";
}

?>
