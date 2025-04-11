<?php
include_once "database_connection.php";

$sql="INSERT INTO pets(id,name,age)
VALUES(2,'Tom',4)";

$insert_data=mysqli_query($conn,$sql);
if($insert_data)
{
    echo "insert data successfully";
}
else {
    echo "data not inserted successfully";
}

?>