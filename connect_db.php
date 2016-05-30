<?php
$user = 'root';
$pass = 'Pass';
$db_name = 'svv';

$db = new mysqli('localhost',$user,$pass,$db_name) or die("Connection failed");

if ($db) {
    echo "Connected!";
} else {
    echo "Not Connected!";
}
?>
