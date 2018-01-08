<?php
session_start();
define('DB_HOST', 'localhost');
define('DB_NAME', 'samrepo');
define('DB_USER','root');
define('DB_PASSWORD','root123');

//$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
//$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
function SignIn()
{

  $user=$_POST['username'];
  if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
  {

    $data = "SELECT *  FROM users where username = '$_POST[username]' AND password = '$_POST[pass]'" or die(mysql_error());
    $query = mysqli_query(mysqli_connect ("localhost","root","root123","samrepo"),$data);
    $row = mysqli_fetch_array($query);
    if(!empty($_POST['username']))
    {
        $_SESSION['username']=$row['username'];
	//$_SESSION["UID"]=$row[userID];
        if(isset($_SESSION["username"]))
        {

        	header('Location:submit.php');

        }
        else
            echo "NOT A REGISTERED USER";

    }
    else
    {
        header('Location:errorpage.html');
    }

}
}
if(isset($_POST['submit']))
{
    SignIn();
}

?>
