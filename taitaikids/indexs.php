<?php
// session_start();

// if(!$_SESSION['user_email'])
// {

//     header("Location: ../index.php");
// }

?>

<?php
// include("config.php");
// extract($_SESSION);
// $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_email =:user_email');
// $stmt_edit->execute(array(':user_email' => $user_email));
// $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
// extract($edit_row);

?>

<?php
include("config.php");
$stmt_edit = $DB_con->prepare("select sum(order_total) as total from orderdetails where user_id=:user_id and order_status='Ordered'");
$stmt_edit->execute(array(':user_id' => $user_id));
$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
extract($edit_row);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDGE Skateshop</title>
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
                <a class="navbar-brand" href="index.php">EDGE Skateshop</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="index.php"> &nbsp; <span class='glyphicon glyphicon-home'></span> Home</a></li>
                    <li><a href="shop.php?id=1"> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> Shop Now</a></li>
                    <li><a href="cart_items.php"> &nbsp; <span class='fa fa-cart-plus'></span> Shopping Cart Lists</a></li>
                    <li><a href="orders.php"> &nbsp; <span class='glyphicon glyphicon-list-alt'></span> My Ordered Items</a></li>
                    <li><a href="view_purchased.php"> &nbsp; <span class='glyphicon glyphicon-eye-open'></span> Previous Items Ordered</a></li>
                    <li><a data-toggle="modal" data-target="#setAccount"> &nbsp; <span class='fa fa-gear'></span> Account Settings</a></li>
                    <li><a href="logout.php"> &nbsp; <span class='glyphicon glyphicon-off'></span> Logout</a></li>


                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#"><i class="fa fa-calendar"></i> <?php
                                                                    $Today = date('y:m:d');
                                                                    $new = date('l, F d, Y', strtotime($Today));
                                                                    echo $new; ?></a>

                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-shopping-cart'></span> Total Price Ordered: &#8369; <?php echo $total; ?> </b></a>

                    </li>


                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $user_email; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="modal" data-target="#setAccount"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">






            <div id="my-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#my-carousel" data-slide-to="1"></li>
                    <li data-target="#my-carousel" data-slide-to="2"></li>
                    <li data-target="#my-carousel" data-slide-to="3"></li>
                    <li data-target="#my-carousel" data-slide-to="4"></li>
                    <li data-target="#my-carousel" data-slide-to="5"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">

                        <img src="../assets/img/1-slide.jpg" alt="Hero Slide" style="width:100%;height:500px;">

                        <div class="carousel-caption">
                            <h1 style="font-family:Century Gothic"><b></b></h1>

                            <h2></h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../assets/img/2-slide.jpg" alt="..." style="width:100%;height:500px;">

                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img src="../assets/img/3-slide.jpg" alt="..." style="width:100%;height:500px;">

                        <div class="carousel-caption">


                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="../assets/img/4-slide.jpg" alt="..." style="width:100%;height:500px;">

                        <div class="carousel-caption">


                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="../assets/img/5-slide.jpg" alt="..." style="width:100%;height:500px;">

                        <div class="carousel-caption">


                            <p></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="../assets/img/6-slide.jpg" alt="..." style="width:100%;height:500px;">

                        <div class="carousel-caption">


                            <p></p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">

                    <span class="icon-prev"></span>

                </a>
                <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">

                    <span class="icon-next"></span>
                </a>

                <!-- #my-carousel-->

            </div>


            <br />
            <div class="alert alert-info">

                &nbsp; &nbsp; Welcome to EDGE Skateshop! So, if you're looking for an Element skateboard, why not visit the EDGE Skateshop?
                It's that easy. If you have a favorite skate brand,
                this is the easiest and most straightforward way to get it.A lot of skate brands who are well known for one thing,
                like decks, also sell completes with
                their own special wheels, along with other brands for things like trucks, bearings, etc.
            </div>
            <br />

            <div class="alert alert-default" style="background-color:#033c73;">
                <p style="color:white;text-align:center;">
                    &copy 2016 EDGE Skateshop| All Rights Reserved | Design by : EDGE Team

                </p>

            </div>

        </div>
    </div>




    </div>



    </div>
    <!-- /#wrapper -->


    <!-- Mediul Modal -->
    <div class="modal fade" id="setAccount" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
        <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 style="color:white" class="modal-title" id="myModalLabel">Account Settings</h2>
                </div>
                <div class="modal-body">




                    <form enctype="multipart/form-data" method="post" action="settings.php">
                        <fieldset>


                            <p>Firstname:</p>
                            <div class="form-group">

                                <input class="form-control" placeholder="Firstname" name="user_firstname" type="text" value="<?php echo $user_firstname; ?>" required>


                            </div>


                            <p>Lastname:</p>
                            <div class="form-group">

                                <input class="form-control" placeholder="Lastname" name="user_lastname" type="text" value="<?php echo $user_lastname; ?>" required>


                            </div>

                            <p>Address:</p>
                            <div class="form-group">

                                <input class="form-control" placeholder="Address" name="user_address" type="text" value="<?php echo $user_address; ?>" required>


                            </div>

                            <p>Password:</p>
                            <div class="form-group">

                                <input class="form-control" placeholder="Password" name="user_password" type="password" value="<?php echo $user_password; ?>" required>


                            </div>

                            <div class="form-group">

                                <input class="form-control hide" name="user_id" type="text" value="<?php echo $user_id; ?>" required>


                            </div>








                        </fieldset>


                </div>
                <div class="modal-footer">

                    <button class="btn btn-block btn-success btn-md" name="user_save">Save</button>

                    <button type="button" class="btn btn-block btn-danger btn-md" data-dismiss="modal">Cancel</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#priceinput').keypress(function(event) {
                return isNumber(event, this)
            });
        });

        function isNumber(evt, element) {

            var charCode = (evt.which) ? evt.which : event.keyCode

            if (
                (charCode != 45 || $(element).val().indexOf('-') != -1) &&
                (charCode != 46 || $(element).val().indexOf('.') != -1) &&
                (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
    </script>
</body>

</html>