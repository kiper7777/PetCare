<?php

  if(isset($_GET['submit']))
  {
    if((!empty($_GET['email']))&&(!empty($_GET['password'])))
    {
        session_start();

        $_SESSION['email']=$_GET["email"];
        // $_SESSION['password']=$_GET['password'];
        $pass=$_GET['password'];

        echo $_SESSION['email'];
        // echo $_SESSION['password'];

        header("location:user_dashboard.php");

    } else {
        echo ("please enter email/password");
    }

    // $name=$_GET['email'];
    // $pass=$_GET['password'];
  }

?>

<?php
session_start();
include_once "database_connection.php";

// Если форма отправлена
if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Поиск пользователя по email
    $query = "SELECT * FROM pet_sitters WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Проверка пароля
        if ($password === $user['password']) { 
            $_SESSION['user_id'] = $user['id']; // сохранить ID в сессии
            header("Location: user_dashboard.php");
            exit();
        } else {
            $error = "❌ Incorrect password.";
        }
    } else {
        $error = "❌ User not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .signin {
            display: flex;
            justify-content: center;
        }

        .signin h2 {
            display: flex;
            justify-content: flex-start;
            margin-top: 50px;
            margin-bottom: 10px;
            font-size: 32px;
            font-weight: 400;
            color: #5a5858;
        }

        .signin-form {
            display: grid;
            align-content: flex-start;
            width: 500px;
            height: auto;
            border: 1px solid rgb(53, 142, 55);
            border-radius: 10px;
            padding: 20px;
            background-color: rgb(255, 255, 255);
            margin-bottom: 70px;
            box-shadow: 0 0 10px rgba(164, 0, 93, 0.1);
            margin-bottom: 400px;
        }

        .signin-form label {
            font-size: 16px;
            font-weight: 600;
            color: #5a5858;
            margin-top: 12px;
            margin-bottom: 4px;
        }

        .signin-form input {
            border: 1px solid rgb(188, 185, 185);
            border-radius: 6px;
            padding: 8px;
            /* margin-bottom: 14px; */
            width: 100%;
            font-size: 16px;
            outline: none;
            box-sizing: border-box;
        }

        .signin-form input:focus {
            border-color: #86b58c;
        }

        .signin-form button {
            background-color: #50805e;
            font-size: 18px;
            font-weight: bold;
            color: white;
            border-radius: 8px;
            margin-top: 40px;
            margin-bottom: 20px;
            padding: 6px;
            width: auto;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .signin-form button:hover {
            background-color: white;
            color: #50805e;
            border: 2px solid #50805e;
            cursor: pointer;
        }

        .signin-form div {
            display: flex;
            flex-direction: column;
        }

        .message .error {
            font-size: 10px;
            height: 6px;
            margin-top: 6px;
            display: none;
        }

        .signin-form .message {
            color: gray;
            display: none;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php include "header.php" ; 
    ?> 

    <main>
        <section class="signin">
            <div>
                <h2>Sign in</h2>

                <?php if (!empty($error)): ?>
                    <p class="error"><?= $error ?></p>
                <?php endif; ?>

                <!-- <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get" class="signin-form"> -->
                <form action="" method="POST" class="signin-form">    
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="" required>
                        <span class="message" id="emailMessage">Enter your email</span>
                        <span class="error" id="emailError"></span>
                    </div>

                    <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                        <span class="message" id="passwordMessage">Enter your password</span>
                        <span class="error" id="passwordError"></span>
                    </div>

                    <!-- <button type="submit" id="submit" onclick="validation()">Sign in</button> -->
                    <button type="submit" id="submit" name="signin">Sign in</button>
                </form>

                <!-- <script src="formvalidation_signin.js"></script> -->
            </div>
        </section>
    </main>

    <?php include "footer.php" ; 
    ?>

    <script src="script.js">
    </script>
</body>

</html>