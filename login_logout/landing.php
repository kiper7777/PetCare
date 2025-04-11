<?php
session_start();
echo "welcome to our website ". $_SESSION['name'];

if(isset($_GET['logout']))
{
    session_destroy();
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
        
        <div>
            <input type="submit" name="logout" value="logout" id="logout">
        </div>

    </form>
    
</body>
</html>