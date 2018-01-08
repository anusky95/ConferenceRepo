<?php
session_start();
define('DB_HOST','localhost');
define('DB_NAME','samrepo');
define('DB_USER','root');
define('DB_PASSWORD','root123');
//$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
//$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
function submit()
{

    $ptitle=$_POST['Title'];
    $Mname=$_POST['mname'];
    $memail=$_POST['memail'];
    $name1=$_POST['Name1'];
    $name2=$_POST['Name2'];
    $name3=$_POST['Name3'];
    $name4=$_POST['Name4'];
    $revision = $_POST['revision'];
    $format = $_POST['format'];
    $_COOKIE['varname'] = $_POST['mname'];


    if(!($ptitle and $Mname and $memail and $name1 and $name2 and $name3 and $name4 and $revision and $format ))
    {
        header('Location:errorpage2.html');
    }
    else //Only if all the fields are filled appropriately
    {
    $query="insert into paperInfo(ptitle,mname,memail,name1,name2,name3,name4,revision,format) values ('$ptitle','$Mname','$memail','$name1','$name2','$name3','$name4','$revision','$format')";
$data=mysqli_query(mysqli_connect ("localhost","root","root123","samrepo"),$query);
    if($data)
    {
       if($_FILES['uploaded_file']['error'] == 0)
        {
        // Connect to the database
        $dbLink = new mysqli('localhost', 'root', 'root123', 'samrepo');
        if(mysqli_connect_errno())
        {
            die("MySQL connection failed: ". mysqli_connect_error());
        }

        // Gather all required data
        $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
        $mime = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);
       // $pname=$_POST['text1'];


        // Create the SQL query
        $query = "
            INSERT INTO `file`
            (
                `authname`,`name`, `mime`, `size`,`data`
            )
            VALUES (
                '{$Mname}','{$name}','{$mime}','{$size}','{$data}'
            )";

        // Execute the query
        $result = $dbLink->query($query);

        // Check if it was successfull
        if($result)
        {
            echo '<span style="color:#FFFFFF;text -align: center;">Success! Your file was successfully added! </span>';
        }
        else
        {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
        }
        else
        {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);
        }
        header('Location:allproj.php');

    // Close the mysql connection
    $dbLink->close();

}
else
    {
    echo 'Error! A file was not sent!';
    }
}
}

 if(isset($_POST['submit']))
{
    submit();
}
?>
