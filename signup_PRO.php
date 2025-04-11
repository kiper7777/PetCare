<?php
// echo "'signup.php' file uploaded successfully!<br>";
var_dump($_POST);
?>

<?php
// var_dump($_POST);
include_once "database_connection.php";

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $username=$_POST['username'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $password=$_POST['password'];
    // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $username = mysqli_real_escape_string($conn, $_POST['username']);
    // $password = $_POST['password'];
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    // $lname = mysqli_real_escape_string($conn, $_POST['lname']);

    echo '<script src="formvalidation_signup.js">
    </script>';
 //    include_once "formvalidation_signup.php";
   
    $sql="INSERT INTO traders_beginners(email,username,`password`,fname,lname) VALUES('$email','$username','$password','$fname','$lname')";

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
    <style>
         /* .auth-buttons .login {
            background-color: #3A2A06;
            font-size: 16px;
            font-weight: bold;
            color: #CD9441;
            border-radius: 8px;
            padding: 10px;
            width: auto;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .auth-buttons .login:hover {
            background-color: #777355;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        } */
           
        .signup {
            display: flex;
            justify-content: center;
        }

        .signup h2 {
            display: flex;
            justify-content: flex-start;
            margin-top: 50px;
            margin-bottom: 10px;
            font-size: 32px;
            font-weight: 400;
        }

        .signup-form {
            display: grid;
            align-content: flex-start;
            width: 500px;
            height: auto;
            border: 1px solid rgb(188, 185, 185);
            border-radius: 10px;
            padding: 20px;
            background-color: rgb(225, 221, 206);
            margin-bottom: 70px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .signup label {
            font-size: 16px;
            font-weight: 600;
            color: #5a5858;
            margin-top: 10px;
            margin-bottom: 4px; 
        }

        .signup-form input {
            border: 1px solid rgb(188, 185, 185);
            border-radius: 6px;
            padding: 8px;
            /* margin-bottom: 14px; */
            width: 100%;
            font-size: 16px;
            outline: none;
            box-sizing: border-box;
        }

        .signup-form input:focus {
            border-color: #0064f9;
        }

        .message .error {
            font-size: 10px;
            height: 6px;
            margin-top: 6px;
            display: none;
        }

        .signup-form .message {
            color: gray;
            display: none;
        }

        .user_info .message {
            color: gray;
            display: none;
        }

        .error {
            color: red;
        }

        .user_info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            gap: 10px;
        }

        .user_info div {
            flex: 1;
            display: flex;
            flex-direction: column;
            max-width: 400px;
        }

        .user_info .country {
            border: 1px solid rgb(188, 185, 185);
            border-radius: 6px;
            padding: 8px;
            width: 100%;
            font-size: 16px;
            box-sizing: border-box;
        }

        .signup-form button {
            background-color: #3A2A06;
            font-size: 18px;
            font-weight: bold;
            color: #CD9441;
            border-radius: 8px;
            margin-top: 40px;
            margin-bottom: 10px;
            padding: 6px;
            width: auto;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .signup-form button:hover {
            background-color: #777355;
            color: white;
            cursor: pointer;
        }

         
        @media (max-width: 481px) {
            body {
                color: rgb(48, 113, 18);
            }

            .burger {
                display: flex
            }

            .menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background-color: #333;
                padding: 10px 0;
                text-align: center;
            }

            .menu .active {
                display: flex;
            }

            .menu ul {
                flex-direction: column;
                gap: 10px;
            }

            .menu a {
                font-size: 18px;
            }

            .burger.active span:nth-child(1) {
                transform: translateY(8px) rotate(45deg);
            }

            .burger.active span:nth-child(2) {
                opacity: 0;
            }

            .burger.active span:nth-child(3) {
                transform: translateY(-8px) rotate(-45deg);
            }

            header {
                text-align: center;
            }

            .container {
                margin: 0;
                padding: 0.4rem 0.8rem;
                justify-content: space-around;
            }

            .logo img {
                width: 60px;
                height: auto;
                display: flex;
                justify-items: start;
            }

            nav ul {
                align-items: center;
            }

            .auth-buttons button {
                padding: 0.2rem 0.4rem;
                font-size: 12px;
                font-weight: 600;
            }
        }

        @media (min-width: 481px) and (max-width: 768px) {
            body {
                color: rgb(17, 65, 38);
            }

            .burger {
                display: flex
            }

            /* .burger span {
                display: block;
                width: 25px;
                height: 3px;
                background-color: #fff;
                transition: all 0.3s ease;
            } */

            .menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background-color: #333;
                padding: 10px 0;
                text-align: center;
            }

            .menu .active {
                display: flex;
            }

            .menu ul {
                flex-direction: column;
                gap: 10px;
            }

            .menu a {
                font-size: 18px;
            }

            .burger.active span:nth-child(1) {
                transform: translateY(8px) rotate(45deg);
            }

            .burger.active span:nth-child(2) {
                opacity: 0;
            }

            .burger.active span:nth-child(3) {
                transform: translateY(-8px) rotate(-45deg);
            }

            header {
                text-align: center;
            }

            .container {
                margin: 0;
                padding: 1rem;
            }

            .logo img {
                width: 70px;
                height: auto;
            }

            nav ul {
                align-items: center;
            }

            .auth-buttons button {
                padding: 0.5rem 1rem;
                gap: 1rem;
                font-size: 16px;
                font-weight: 600;
            }
       }

        @media (min-width: 769px) and (max-width: 1024px) {
            body {
                color: rgb(105, 91, 91);
            }

            .container {
                margin: 0;
                padding: 1rem;
            }

            .logo img {
                width: 90px;
                height: auto;
            }

            nav ul {
                display: flex;
                gap: 1rem;
            }

            .auth-buttons {
                display: flex;
                gap: 8px;
            }
        }

              

        
        
    </style>
</head>

<body>
    <?php include "header.php" ; 
    ?>
    
    <main>
        <section class="signup">
            <div>
                <h2>Sign Up</h2>
                <form id="signup-form" action="signup.php" method="POST" class="signup-form">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="youremail@gmail.com">
                    <span class="message" id="emailMessage">For account activation and important updates</span>
                    <span class="error" id="emailError"></span>

                    <div class="user_info">
                        <div>
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" required>
                            <span class="message" id="usernameMessage">Enter your username</span>
                            <span class="error" id="usernameError"></span>
                        </div>

                        <div>
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                            <span class="message" id="passwordMessage">Enter your password</span>
                            <span class="error" id="passwordError"></span>
                        </div>
                    </div>
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

                    <!-- <label for="address">Address</label>
                    <input type="text" id="address" name="address" required>

                    <label for="address">Address 2 (Optional)</label>
                    <input type="text" id="address2" name="address2">

                    <div class="user_info">
                        <div>
                            <label for="country">Country</label>
                            <select id="country" name="country" class="country">
                                <option value="">Select a country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="UK">United Kingdom</option>
                                <option value="DE">Germany</option>
                                <option value="FR">France</option>
                                <option value="ES">Spain</option>
                                <option value="IT">Italy</option>
                                <option value="AU">Australia</option>
                                <option value="BR">Brazil</option>
                                <option value="IN">India</option>
                            </select>
                        </div>

                        <div>
                            <label for="state">State</label>
                            <input type="text" id="state" name="state" required>
                        </div>
                    </div>

                    <div class="user_info">
                        <div>
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" required>
                        </div>

                        <div>
                            <label for="zip">Zip</label>
                            <input type="text" id="zip" name="zip" required>
                        </div>
                    </div> -->

                    <!-- <button type="submit" id="submit" name="submit" onclick="validation()">Complete Sign Up</button> -->

                    <button type="submit" id="submit" name="submit" >Complete Sign Up</button>
                    <span class="link">Already have an account? <a href="login.php">Log in</a></span>
                </form>

                <!-- <script src="formvalidation_signup.js">
                </script> -->
                <?php
                // echo "<script src='formvalidation_signup.js'></script>"
                ?>
            </div>
        </section>
    </main>

    <?php include "footer.php"; 
    ?>

    <script src="script.js">
    // document.getElementById('signupForm').addEventListener('submit', function(e) {
    // e.preventDefault(); 

    // const formData = new FormData(this);

    // fetch('signup.php', {
    //     method: 'POST',
    //     body: formData
    // })
    // .then(response => response.text())
    // .then(data => {
    //     console.log('Server response:', data);
    //     alert('Registration was successful!');
    // })
    // .catch(error => {
    //     console.error('Error:', error);
    //     alert('Error sending data');
    // });
    // });
    </script>
</body>

</html>