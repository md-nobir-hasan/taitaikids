
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

    $admin_id = check($_POST['admin_id']);
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

    $sql_check_admin = "select * from admin WHERE admin_username='$admin_id' AND admin_password='$password'";
    $execute = mysqli_query($conn, $sql_check_admin);

    if ($execute->num_rows > 0) {
        $_SESSION['admin_id'] = $admin_id;
        echo (1);
    } else {

        echo (2);
    }
}

?>