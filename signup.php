<?php
// echo "'signup.php' file uploaded successfully!<br>";
var_dump($_POST);
?>

<?php
// var_dump($_POST);

include_once "database_connection.php";

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $postcode=$_POST['postcode'];
    $email=$_POST['email'];
    $password=$_POST['password'];

//     $fname = mysqli_real_escape_string($conn, $_POST['fname']);
//     $lname = mysqli_real_escape_string($conn, $_POST['lname']);
//     $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);
//     $email = mysqli_real_escape_string($conn, $_POST['email']);
//     $password = $_POST['password'];
//    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

   echo '<script src="formvalidation_signup.js">
   </script>';
//    include_once "formvalidation_signup.php";
 
 
   $sql="INSERT INTO pet_sitters(fname,lname,postcode,email,`password`) VALUES('$fname','$lname','$postcode','$email','$password')";

   $res= mysqli_query($conn, $sql);
   if($res)
   {
    echo 'Insert the data successfully';
   }else{
    die('Error: ' . mysqli_error($conn));
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
    <style></style>

</head>

<body>
    <?php include "header.php"?> 

    <main>
        <section class="signup">
            <div>
                <h2>Sign Up</h2>
                <form id="signup-form" action="signup.php" method="post" class="signup-form">

                    <div class="user_info">
                        <div>
                            <label for="firstname">First name</label>
                            <input type="text" id="fname" name="fname" required>
                            <span class="message" id="fnameMessage">Enter your first name</span>
                            <span class="error" id="fnameError"></span>
                        </div>

                        <div>
                            <label for="lastname">Last name</label>
                            <input type="text" id="lname" name="lname" required>
                            <span class="message" id="lnameMessage">Enter your last name</span>
                            <span class="error" id="lnameError"></span>
                        </div>
                    </div>

                    <div class="user_info">
                        <div>
                            <label for="postcode">Postcode</label>
                            <input type="text" id="postcode" name="postcode" required>
                            <span class="message" id="postcodeMessage">Enter your password</span>
                            <span class="error" id="postcodeError"></span>
                        </div>

                        <div>
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="">
                            <span class="message" id="emailMessage">For account activation and important updates</span>
                            <span class="error" id="emailError"></span>
                        </div>

                        <div>
                            <label for="password">Create a password</label>
                            <input type="password" id="password" name="password" required>
                            <span class="message" id="passwordMessage">Enter your password</span>
                            <span class="error" id="passwordError"></span>
                        </div>
                    </div>

                    <button type="submit" id="submit" name="submit" >Complete Sign Up</button>
                    <span class="link">Already have an account? <a href="signin.php">Sign in</a></span>
                </form>

                <!-- <script src="formvalidation_signup.js"></script> -->
            </div>
        </section>
    </main>

    <?php include "footer.php"?>

    <script src="script.js">
    </script>
</body>

</html>