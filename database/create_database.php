<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername, $username, $password);
if($conn)
{
    echo "connect with server successfully";
} else {
    echo "not connected please try again" + mysqli_connect_error();
}


$sql="CREATE DATABASE EmployeeLondon";
$create_db=mysqli_query($conn, $sql);
if($create_db)
{
    echo "table created successfully";
} 
else echo "table not created successfully".mysqli_error($conn);



?>