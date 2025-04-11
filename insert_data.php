<?php
include_once "database_connection.php";

$sql="INSERT INTO pet_sitters(id,fname,lname,postcode,email,`password`)
VALUES(3,'Tom','Bart','MK442DH','tom@ukr.net','123456qwerty')";

$insert_data=mysqli_query($conn,$sql);
if($insert_data)
{
    echo "Insert data successfully";
}
else {
    echo "Data not inserted successfully";
}

?>