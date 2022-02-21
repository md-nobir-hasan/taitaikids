<?php
session_start();
if (isset($_SESSION["phone_num"])) {
    header("location: index.php");
}

?>
<?php

include("db_conection.php");



if (isset($_POST['login'])) {
    $user_id = $_POST['phone_num'];
    $user_password = $_POST['password'];


    $sql = "select * from users WHERE user_id='$user_id' AND user_password='$user_password'";


    $execute = mysqli_query($conn, $sql);

    if (mysqli_num_rows($execute) > 0) {
        echo "<script>alert('You're successfully login!')</script>";
        $_SESSION['phone_num'] = $user_id;
        echo "<script>window.open('index.php','_self')</script>";
    } else {
        echo "<script>alert('Phone number and password is incorrect!Try again or reset password or Sign up')</script>";
    }
}
?>


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="./css/style_user_login.css">

    <title>TaiTaiKids</title>

</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Login Form</span></div>

            <form method="POST">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="tel" name="phone_num" id="phone_num" pattern="[0-9]{10}" required placeholder="format: 1988406007">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" value="" placeholder="Password" required>
                </div>
                <!-- <div class="pass"><a href="#">Forgot password?</a></div> -->
                <div class="row button">
                    <input type="submit" name="login" value="login">
                </div>
                <!-- <div class="signup-link">Not a member? <a href="#">Signup now</a></div> -->
            </form>
        </div>
    </div>

</body>

</html>