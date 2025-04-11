<?php
  if(isset($_GET['submit']))
  {
    if((!empty($_GET['userid']))&&(!empty($_GET['pass'])))
    {
        session_start();

        $_SESSION['name']=$_GET["userid"];
        // $_SESSION['pass']=$_GET['pass'];
        $pass=$_GET['pass'];

        echo $_SESSION['name'];
        // echo $_SESSION['pass'];

        header("location:landing.php");

    } else {
        echo ("please enter password/userid");
    }


    // $name=$_GET['userid'];
    // $pass=$_GET['pass'];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px;
            background-color: lightgreen;
        }
        input{
            margin: 10px;
        }
    </style>
</head>

<body>
   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
      <div class="input">
        <label for="userid">name</label>
        <input type="name" name="userid" id="userid">
      </div>

      <div class="input">
        <label for="pass">password</label>
        <input type="password" name="pass" id="pass">
      </div>

      <div class="input">
         <input type="submit" name="submit" value="submit">
      </div>

   </form>
    
</body>
</html>