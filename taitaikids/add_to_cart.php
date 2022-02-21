<?php
session_start();

include("db_conection.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaiTai Shop</title>
    <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon" />
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

                    <li class="active">
                        <!-- <a href="index.php"> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> Shop Now</a> -->
                        <?php

                        if (isset($_SESSION['phone_num'])) {
                            echo "<a href='index.php'> &nbsp; <span class='glyphicon glyphicon-home'></span> Home</a>";
                        } else {
                            echo "<a href='index.php'> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> Shop Now</a>";
                        }
                        ?>
                    </li>
                    <li>
                        <!-- You can increase an option in here  -->
                    </li>
                    <li>
                        <!-- <a href="index.php"> &nbsp; <span class='fa fa-cart-plus'></span> Shopping Cart Lists</a> -->
                        <?php

                        if (isset($_SESSION['phone_num'])) {
                            echo "  <a href='index.php'> &nbsp; <span class='fa fa-cart-plus'></span> Shopping Cart Lists</a>";
                        } else {
                            echo "  <a href='index.php'> &nbsp; <span class='fa fa-cart-plus'></span>Sign Up</a>";
                        }
                        ?>
                    </li>
                    <li>
                        <!-- <a href="orders.php"> &nbsp; <span class='glyphicon glyphicon-list-alt'></span> My Ordered Items</a> -->
                        <?php

                        if (isset($_SESSION['phone_num'])) {
                            echo "<a href='orders.php'> &nbsp; <span class='glyphicon glyphicon-list-alt'></span> My Ordered Items</a>";
                        } else {
                            echo "<a href='orders.php'> &nbsp; <span class='glyphicon glyphicon-list-alt'></span> Login</a>";
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
                        <?php

                        // if (isset($_SESSION['phone_num'])) {
                        //     echo "<a data-toggle='modal' data-target='#setAccount'> &nbsp; <span class='fa fa-gear'></span> Account Settings</a>";
                        // }
                        ?>
                    </li>
                    <li>

                        <?php

                        // if (isset($_SESSION['phone_num'])) {
                        //     echo  <a href='index.php'> &nbsp; <span class='fa fa-cart-plus'></span> Shopping Cart Lists</a>";
                        // }
                        ?>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact </b></a>

                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">


            <?php
            $item_id = $_GET['cart'];
            $sql = "SELECT * FROM items WHERE item_id ='$item_id'";
            // echo $user_id;
            $execute = mysqli_query($conn, $sql);
            if ($execute) {


                while ($rows = mysqli_fetch_assoc($execute)) {

                    $item_id  = $rows['item_id'];
                    $item_name = $rows['item_name'];
                    $item_price = $rows['item_price'];
                    $item_image = $rows['item_image'];
                }
            }

            ?>




            <form role="form">

                <div class="alert alert-default" style="color:white;background-color:#008CBA">
                    <center>
                        <h3> <span class="glyphicon glyphicon-info-sign"></span> Order Details</h3>
                    </center>
                </div>

                <!-- <td><input class="form-control" type="hidden" name="order_name" value="<?php //echo $item_name; 
                                                                                            ?>" /></td>
                <td><input class="form-control" type="hidden" name="order_price" value="<?php //echo $item_price; 
                                                                                        ?>" /></td>
                <td><input class="form-control" type="hidden" name="user_id" value="<?php //echo $user_id; 
                                                                                    ?>" /></td> -->

                <table class="table table-bordered table-responsive">



                    <tr>
                        <td><label class="control-label">Name of Item.</label></td>
                        <td><input id="name_item" class="form-control" type="text" name="v1" value="<?php echo $item_name;
                                                                                                    ?>" disabled /></td>




                    </tr>


                    <tr>
                        <td><label class="control-label">Price.</label></td>
                        <td><input class="form-control" type="text" id="price_item" name="v2" value="<?php echo $item_price; ?>" disabled /></td>
                    </tr>



                    <tr>
                        <td><label class="control-label">Image.</label></td>
                        <td>
                            <p><img class="img img-thumbnail" src=" ./Admin/item_images/<?php echo $item_image; ?>" style="height:250px;width:350px;" /></p>

                        </td>

                    <tr>
                        <td><label class="control-label">Quantity.</label></td>
                        <td><input id="quantity_item" class="form-control" type="text" placeholder="Quantity" name="order_quantity" value="1" onkeypress="return isNumber(event)" onpaste="return false" required /></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <?php if (isset($_SESSION['phone_num'])) {

                                echo '<button type="button" name="order_save" class="item_card btn btn-primary">
                                <span class=" glyphicon glyphicon-shopping-cart"></span> OK
                            </button>';
                            } else {
                                //  
                                echo ' <button type="button" name="order_save" class="sign_up btn btn-primary" id="<?php echo $id; ?>">
                            <span class=" glyphicon glyphicon-shopping-cart"></span> OK
                        </button>';
                            } ?>
                            <a class="btn btn-danger" href="index.php"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>

                    </tr>

                </table>

            </form>





            <br />

            <div class="alert alert-default" style="background-color:#033c73;">
                <p style="color:white;text-align:center;">
                    &copy 2022 MDNH SD| All Rights Reserved | Design by : MDNH Team

                </p>

            </div>

        </div>
    </div>
    </div>
    </div>
</body>

<!-- Jquery library  -->
<script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




<script>
    //
    //Sign Up
    //
    $(document).ready(function() {
        $(".sign_up").on("click", function() {
            var id = $(this).attr('id');
            var name_item = $("#name_item").val();
            var price_item = $("#price_item").val();
            var quantity_item = $("#quantity_item").val();

            // alert(name_item);
            // alert(price_item);
            // alert(quantity_item);


            // alert(id);
            var options = {
                ajaxPrefix: ''
            };

            new Dialogify('./ajax_file/model_body.php', options)
                .title("Please,Sign UP")
                .buttons([{
                        text: "Cancle",
                        type: Dialogify.BUTTON_DANGER,
                        click: function(e) {
                            this.close();
                        }
                    },
                    {
                        text: 'Sign Up',
                        type: Dialogify.BUTTON_PRIMARY,
                        click: function(e) {

                            var pattern_phone_nu = /[0-9]{10}/m;
                            var regex_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

                            var regex_adress = /^[a-zA-Z0-9\s\,\''\-]*$/;

                            var regex_password = /[a-z-0-9]+/mi;

                            var full_name = $('#full_name').val();
                            var phone_num = $('#phone_num').val();
                            var email = $('#email').val();
                            var address = $('#address').val();
                            var password = $('#password').val();

                            if (full_name == '') {
                                alert("Input your full name");
                            } else if (!pattern_phone_nu.test(phone_num)) {
                                alert("Input your Phone Number with 10 number");
                            } else if (!regex_email.test(email)) {
                                alert("Enter a valid email");
                            } else if (!regex_adress.test(address)) {
                                alert("Give Your accurate address");
                            } else if (!regex_password.test(password)) {
                                alert("Make a password with letter and number");
                            } else {
                                $.ajax({
                                    url: './ajax_file/sign_up.php',
                                    method: "POST",
                                    data: {
                                        full_name: full_name,
                                        phone_num: phone_num,
                                        email: email,
                                        address: address,
                                        password: password
                                    },
                                    // dataType:'json',
                                    // contentType: false,
                                    // cache: false,
                                    // processData: false,
                                    success: function(data) {
                                        alert(data);
                                        $.ajax({
                                            cache: false,
                                            url: "./save_order.php",
                                            method: "POST",
                                            data: {
                                                phone_num: phone_num,
                                                order_name: name_item,
                                                order_price: price_item,
                                                order_quantity: quantity_item
                                            },
                                            success: function(data) {
                                                if (data == 1) {
                                                    window.open("cart_items.php", "_self");
                                                } else {
                                                    alert("Order can't be added.");
                                                }
                                            }
                                        });

                                    }
                                });
                            }
                        }
                    }

                ]).showModal();
        });
    });


    //
    //Item added to card
    //

    $(document).ready(function() {
        $(".item_card").on("click", function() {
            var name_item = $("#name_item").val();
            var price_item = $("#price_item").val();
            var quantity_item = $("#quantity_item").val();

            $.ajax({
                cache: false,
                url: "./save_order.php",
                method: "POST",
                data: {
                    order_name: name_item,
                    order_price: price_item,
                    order_quantity: quantity_item
                },
                success: function(data) {
                    if (data == 1) {
                        alert("Item successfully added to your card");
                        window.open("cart_items.php", "_self");
                    }

                }
            });
        });
    });
</script>

</html>