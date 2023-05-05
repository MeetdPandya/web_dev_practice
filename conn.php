<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "test";

$conn = mysqli_connect($server , $username ,$password , $db);
if ($conn -> connect_error)
{
    die("Connnection Failed :" .$conn->connect_error);
}
else{
    // echo ("Connection Established");
}


?>
