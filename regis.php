<?php
session_start();
define('DB_HOST','localhost');
define('DB_NAME','samrepo');
define('DB_USER','root');
define('DB_PASSWORD','root123');
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
//$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
function NewUser()
{

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['pass1'];
    if($pass!=$cpass)
        echo "Passwords do not match.Please try again";
    $query="insert into users(firstname,lastname,username,email,password) values ('$fname','$lname','$username','$email','$pass')";
    $data=mysqli_query(mysqli_connect ("localhost","root","root123","samrepo"),$query);
    if($data)
    {
       header('Location:mainpage.html');
        //echo "working";
    }
    else
        echo "wrong";

}

function SignUp()
{

        NewUser();

}

 if(isset($_POST['submit']))
{
    NewUser();
}
?>
