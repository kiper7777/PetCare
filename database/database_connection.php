<?php
$servername="localhost";
$username="root";
$password="";
$database="saestudent";

$conn=mysqli_connect($servername, $username, $password, $database);
if(!$conn)
{
    die("not connected successfully".mysqli_connect_error());
} 


?>