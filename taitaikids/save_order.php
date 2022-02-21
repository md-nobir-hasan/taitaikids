
<?php
session_start();

include("db_conection.php");
// if(isset($_SERVER['REQUEST_METHOD'] == 'POST'))
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_name = $_POST['order_name'];
    $order_price = $_POST['order_price'];
    $order_quantity = $_POST['order_quantity'];
    $order_total = $order_price * $order_quantity;
    $order_status = 'Pending';


    $user_id = $_SESSION["phone_num"];


    $save_order_details = "insert into orderdetails (user_id,order_name,order_price,order_quantity,order_total,order_status,order_date) VALUE ('$user_id','$order_name','$order_price','$order_quantity','$order_total','$order_status',CURDATE())";
    mysqli_query($conn, $save_order_details);
    // echo "alert('Item successfully added to cart!')";
    $_SESSION["phone_num"] = $user_id; //Phone Number save on Session
    // echo "window.open('cart_items.php','_self')";
    echo (1);
} else {
    echo "alert('can't get user id')";
}


?>
