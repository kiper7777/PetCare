<?php if (isset($_SESSION['user_id'])): ?>
    <form action="logout.php" method="POST" style="display: inline;">
        <button type="submit" style="background: none; border: none; color: blue; cursor: pointer;">Log out</button>
    </form>
<?php endif; ?>


<?php
session_start();
include_once "database_connection.php";

// Проверка аутентификации
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}

$userId = $_SESSION['user_id'];

// Получение данных пользователя
$query = "SELECT * FROM pet_sitters WHERE id = $userId";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

// Обработка обновления данных
if (isset($_POST['edit'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $postcode=$_POST['postcode'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $updateQuery = "UPDATE pet_sitters SET fname='$fname', lname='$lname', postcode='$postcode',
    email='$email', password='$password'  WHERE id=$userId";
    mysqli_query($conn, $updateQuery);

    header("Location: user_dashboard.php?success=1");
    exit();
}

// Обработка удаления аккаунта
if (isset($_POST['delete'])) {
    $deleteQuery = "DELETE FROM pet_sitters WHERE id=$userId";
    mysqli_query($conn, $deleteQuery);

    session_destroy();
    header("Location: signin.php?deleted=1");
    exit();
}
?>

<!-- Logout -->
<?php
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
    <title>Personal account</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { 
            max-width: 400px; 
            margin: auto; 
            background-color:rgb(234, 247, 235);
            padding: 20px;
            border-radius:20px;
            border: 1px solid rgb(188, 185, 185);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form { 
            display: grid; 
            gap: 10px; 
        }
        form label{
            font-size: 16px;
            font-weight: 600;
            color: #5a5858;
            margin-top: 10px;
        }
        input { 
            border-radius:6px; 
            padding: 10px; 
            border: 1px solid rgb(188, 185, 185);
        }
        button { 
            border-radius:6px; 
            padding: 10px; 
            font-weight: bold; 
            border: none;
        }

        .success { 
            color: green; 
        }

        .btn_delete { 
            background-color: rgb(251, 91, 91); 
        }
        .btn_edit { 
            background-color: rgb(244, 188, 85); 
            margin-top: 20px;
        }

        .logout{
            border-radius: 6px;
            /* border: 2px solid gray; */
            background-color: gray;
            color: white;
            font-size: 14px;
            font-weight: bold;
            padding: 10px;
            cursor: pointer;
            margin-top:10px;
        }
        .head {
            display:flex; 
            justify-content:space-between; 
            align-items:center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="head">
            <h2>Welcome, <?= htmlspecialchars($user['fname']) ?>!</h2>

            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
                <div>
                    <input type="submit" name="logout" value="Logout" id="logout" class="logout">
                </div>
            </form>
        </div>

        <?php if (isset($_GET['success'])): ?>
            <p class="success">✅ Data updated successfully.</p>
        <?php endif; ?>

        <form method="POST" action="">
            <label>First Name:</label>
            <input type="text" name="fname" value="<?= htmlspecialchars($user['fname']) ?>" required>

            <label>Last Name:</label>
            <input type="text" name="lname" value="<?= htmlspecialchars($user['lname']) ?>" required>

            <label>Post Code:</label>
            <input type="text" name="postcode" value="<?= htmlspecialchars($user['postcode']) ?>" required>

            <label>Email:</label>
            <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>

            <label>Password:</label>
            <input type="text" name="password" value="<?= htmlspecialchars($user['password']) ?>" required>

 
            <button class="btn_edit" type="submit" name="edit">💾 Edit profile</button>
            <button class="btn_delete" type="submit" name="delete" onclick="return confirm('Are you sure you want to delete your account?')">🗑️ Delete account</button>
        </form>
        
    </div>
</body>
</html>
