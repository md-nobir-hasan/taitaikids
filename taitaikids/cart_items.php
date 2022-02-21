<?php
session_start();
if (!isset($_SESSION["phone_num"])) {
    header("location: index.php");
}

include("./db_conection.php");


$user_id =  $_SESSION["phone_num"];


//
//Delete query
//
if (isset($_GET['delete_id'])) {

    $order_id = $_GET['delete_id'];


    $sql_delet = "DELETE FROM orderdetails WHERE order_id = $order_id";
    $execute = mysqli_query($conn, $sql_delet);
    if ($execute) {
        header("Location: cart_items.php");
    }
}


if (isset($_GET['update_id'])) {

    $update_id = $_GET['update_id'];

    $sql_update = "update orderdetails set order_status='Ordered' WHERE order_status='Pending' and user_id =$user_id";
    $execute = mysqli_query($conn, $sql_update);
    if ($execute) {
        echo "<script>alert('Item/s successfully ordered!We call you as soon as possible')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaiTai Shop</title>
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>



</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">TaiTai Shop</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <!-- <a href="index.php"> &nbsp; <span class='glyphicon glyphicon-home'></span> Home</a> -->
                        <?php

                        if (isset($_SESSION['phone_num'])) {
                            echo "<a href='index.php'> &nbsp; <span class='glyphicon glyphicon-home'></span> Home</a>";
                        } else {
                            echo "<a href='index.php'> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> Shop Now</a>";
                        }
                        ?>
                    </li>
                    <li class="active">
                        <!-- <a href="#"> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> Shop Now</a> -->
                    </li>
                    <li>
                        <!-- <a href="cart_items.php"> &nbsp; <span class='fa fa-cart-plus'></span> Shopping Cart Lists</a> -->
                        <?php

                        if (isset($_SESSION['phone_num'])) {
                            echo " <a href='cart_items.php'> &nbsp; <span class='fa fa-cart-plus'></span> Shopping Cart Lists</a>";
                        } else {
                            echo "  <button class='sign_up'value='btn' type='button' href='index.php'> &nbsp; <span class='fa fa-cart-plus'></span>Sign Up</button>";
                        }
                        ?>
                    </li>
                    <li>
                        <!-- <a href="orders.php"> &nbsp; <span class='glyphicon glyphicon-list-alt'></span> My Ordered Items</a> -->
                        <?php

                        if (isset($_SESSION['phone_num'])) {
                            echo "<a href='orders.php'> &nbsp; <span class='glyphicon glyphicon-list-alt'></span> My Ordered Items</a>";
                        } else {
                            echo "<a href='user_login.php'> &nbsp; <span class='glyphicon glyphicon-list-alt'></span> Login</a>";
                        }
                        ?>
                    </li>
                    <li>
                        <!-- <a href="view_purchased.php"> &nbsp; <span class='glyphicon glyphicon-eye-open'></span> Previous Items Ordered</a> -->
                        <?php

                        // if (isset($_SESSION['phone_num'])) {
                        //     echo "<a href='view_purchased.php'> &nbsp; <span class='glyphicon glyphicon-eye-open'></span> Previous Items Ordered</a>";
                        // }
                        ?>
                    </li>
                    <li>
                        <!-- <a data-toggle="modal" data-target="#setAccount"> &nbsp; <span class='fa fa-gear'></span> Account Settings</a> -->
                        <?php

                        // if (isset($_SESSION['phone_num'])) {
                        //     echo "<a data-toggle='modal' data-target='#setAccount'> &nbsp; <span class='fa fa-gear'></span> Account Settings</a>";
                        // }
                        ?>
                    </li>
                    <li>
                        <!-- <a href="logout.php"> &nbsp; <span class='glyphicon glyphicon-off'></span> Logout</a> -->
                        <?php

                        if (isset($_SESSION['phone_num'])) {
                            echo "<a href='logout.php'> &nbsp; <span class='glyphicon glyphicon-off'></span> Logout</a>";
                        }
                        ?>
                    </li>


                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#">Admin</a>

                    </li>
                    <li class="dropdown messages-dropdown">
                        <a href="#">About Us</a>

                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Contact </b></a>

                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">


            <div class="alert alert-default" style="color:white;background-color:#008CBA">
                <center>
                    <h3> <span class="fa fa-cart-plus"></span> Shopping Cart Lists</h3>
                </center>
            </div>

            <br />

            <div class="table-responsive">
                <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // include("config.php");

                        // $stmt = $DB_con->prepare("SELECT * FROM orderdetails where order_status='Pending' and user_id='$user_id'");
                        $sql = "SELECT * FROM orderdetails WHERE order_status='Pending' and user_id ='$user_id'";
                        // echo $user_id;
                        $execute = mysqli_query($conn, $sql);
                        if ($execute->num_rows > 0) {


                            while ($rows = mysqli_fetch_assoc($execute)) {

                                $order_name = $rows['order_name'];
                                $order_price = $rows['order_price'];
                                $order_quantity = $rows['order_quantity'];
                                $order_total = $rows['order_total'];

                        ?>
                                <tr>

                                    <td><?php echo $order_name; ?></td>
                                    <td>&#8369; <?php echo $order_price; ?> </td>
                                    <td><?php echo $order_quantity; ?></td>
                                    <td>&#8369; <?php echo $order_total; ?> </td>

                                    <td>
                                        <a class="btn btn-block btn-danger" href="?delete_id=<?php echo $rows['order_id']; ?>" title="click for delete" onclick="return confirm('Are you sure to remove this item?')"><span class='glyphicon glyphicon-trash'></span> Remove Item</a>

                                    </td>
                                </tr>
                            <?php
                            }

                            ?>

                            <?php

                            $sql_order = "select sum(order_total) as totalx from orderdetails where user_id=$user_id and order_status='Pending'";
                            $execute = mysqli_query($conn, $sql_order);
                            if ($execute) {

                                $row = mysqli_fetch_assoc($execute);

                                echo "<tr>";
                                echo "<td colspan='3' align='right'>Total Price:";
                                echo "</td>";

                                echo "<td>&#8369; " . $row['totalx'];
                                echo "</td>";

                                echo "<td>";
                                echo "<a class='btn btn-block btn-success' href='?update_id=" . $user_id . "' ><span class='glyphicon glyphicon-shopping-cart'></span> Order Now!</a>";
                                echo "</td>";

                                echo "</tr>";
                                echo "</tbody>";
                                echo "</table>";
                                echo "</div>";
                                echo "<br />";
                                echo '<div class="alert alert-default" style="background-color:#033c73;">
                                  <p style="color:white;text-align:center;">
                                 &copy 2016 EDGE Skateshop| All Rights Reserved |  Design by : EDGE Team

					        	</p>
                        
                                 </div>
                            	</div>';

                                echo "</div>";
                            }
                        } else {

                            ?>


                            <div class="col-xs-12">
                                <div class="alert alert-warning">
                                    <span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Item Found ...
                                </div>
                            </div>

                        <?php
                        }

                        ?>



            </div>
        </div>

    </div>

    </div>

</body>

</html>