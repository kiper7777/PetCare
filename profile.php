<?php
session_start();
include "database_connection.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

if (isset($_POST['update_profile'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    if (!empty($_FILES['profile_photo']['name'])) {
        $photo_name = $_FILES['profile_photo']['name'];
        $photo_tmp = $_FILES['profile_photo']['tmp_name'];
        $target_dir = "uploads/";
        move_uploaded_file($photo_tmp, $target_dir . $photo_name);

        $sql = "UPDATE traders_beginners SET fname='$fname', lname='$lname', photo='$photo_name' WHERE id=$user_id";
    } else {
        $sql = "UPDATE traders_beginners SET fname='$fname', lname='$lname' WHERE id=$user_id";
    }

    mysqli_query($conn, $sql);
    echo "Profile updated.";
}

// Получаем текущие данные
$result = mysqli_query($conn, "SELECT * FROM traders_beginners WHERE id=$user_id");
$user = mysqli_fetch_assoc($result);
?>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="fname" value="<?= $user['fname'] ?>" required>
    <input type="text" name="lname" value="<?= $user['lname'] ?>" required>
    <input type="file" name="profile_photo">
    <button type="submit" name="update_profile">Save</button>
</form>

<?php if (!empty($user['photo'])): ?>
    <img src="uploads/<?= $user['photo'] ?>" alt="Profile Photo" style="width:150px;">
<?php endif; ?>
