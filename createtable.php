<?php
include_once "database_connection.php";
$sql="CREATE TABLE pet_sitters(
    id INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(22),
    lname VARCHAR(20),
    postcode VARCHAR(10),
    email VARCHAR(30),
    `password` VARCHAR(255)
);";

    $create_table=mysqli_query($conn, $sql);
    if($create_table)
    {
        echo "Table created successfully!";
    } 
    else {
        echo "Table not created successfully!".mysqli_error($conn);
    }

?>