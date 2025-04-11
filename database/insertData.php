<?php
$sql="INSERT INTO contentcreation_student
(name,lname,age)
VALUES('$name','$lname',$age)";
$insert_data=mysqli_query($conn,$sql);
if($insert_data)
{
    echo "insert data successfully";
}
else {
    echo "data not inserted successfully";
}
?>