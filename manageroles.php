<?php
session_start();
define('DB_HOST','localhost');
define('DB_NAME','samrepo');
define('DB_USER','root');
define('DB_PASSWORD','root123');
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());

$passd = $_POST['pass'];
if (preg_match('/pcc/',$passd))
{
  header('Location:pcc.php');
}
elseif (preg_match('/pcm/',$passd))
{
  header('Location:pcm.php');
}
else {
  header('Location:check.php');
}
?>
