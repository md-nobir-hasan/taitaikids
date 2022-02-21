
<?php

session_start();
//Database Conection
include('../db_conection.php');




function check($value)
{
    $data = htmlspecialchars($value);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = check($_POST['full_name']);
    $user_id  = check($_POST['phone_num']);
    $email = check($_POST['email']);
    $address = check($_POST['address']);
    $password = check($_POST['password']);
    // echo $name;
    // echo "<br>";
    // echo $phone_num;
    // echo "<br>";
    // echo $email;
    // echo "<br>";
    // echo $address;
    // echo "<br>";
    // echo $password;
    // echo "Every value null";
    // echo "<br>";

    $sql = "SELECT * FROM users WHERE user_id ='$user_id'";
    $execute = mysqli_query($conn, $sql);
    if ($execute->num_rows > 0) {
        echo "You have an acount.please,login.Or try with another phone num";
    } else {



        $sql = "INSERT INTO users (`user_id`,`user_name`,user_email,user_address,user_password) VALUES(?,?,?,?,?)";

        $statment = mysqli_prepare($conn, $sql);
        if ($statment) {
            mysqli_stmt_bind_param($statment, "issss", $user_id, $name, $email, $address, $password);

            $user_id = $user_id;
            $name = $name;
            $email = $email;
            $address = $address;
            $password = $password;

            $execute = mysqli_stmt_execute($statment);
            if ($execute) {
                $_SESSION['phone_num'] = $user_id;
                echo ("Thank you.You can order now");
                // header("location: ../index.php");
            } else {
                $err = "Acount don't creat";
            }
        }
    }
}

?>