<?php
$user = 'root';
$pass = 'Pass';
$db_name = 'svv';

$db = new mysqli('localhost',$user,$pass,$db_name) or die("Connection failed");

if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
include 'connect_db.php';
mysqli_query($db,"INSERT INTO upload (name, size, type, content ) VALUES ('$fileName', '$fileSize', '$fileType', '$content')") or die(mysqli_error($db));


header("Location: downloadPage.php");
}
?>
