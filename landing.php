<?php
session_start();
echo "Congratulations, " . $_SESSION['email'] . " and welcome to our service!";

if(isset($_GET['logout']))
{
    session_destroy();
    header("location:signin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* form{
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px;
            background-color: lightgreen;
        } */
        input{
            margin: 10px;
        }
        form input{
            background-color: pink;
            border-radius: 6px;
            padding: 10px;
        }
    </style>
</head>
<body>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
        
        <div>
            <input type="submit" name="logout" value="logout" id="logout">
        </div>

    </form>
    
</body>
</html>