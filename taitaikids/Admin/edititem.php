<?php
session_start();

if (!$_SESSION['admin_id']) {

    header("Location: ../index.php");
}



include("../db_conection.php");

if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {

    $item_id = $_GET['edit_id'];

    $sql_edit = "SELECT * FROM items WHERE item_id = $item_id";
    $execute = mysqli_query($conn, $sql_edit);
    $edit_row = mysqli_fetch_assoc($execute);

    $item_name_edit = $edit_row['item_name'];
    $item_price_edit = $edit_row['item_price'];
    $item_image_edit  = $edit_row['item_image'];
    $item_date_edit = $edit_row['item_date'];



    if (isset($_POST['btn_save_updates'])) {
        $item_name = $_POST['item_name'];
        $item_price = $_POST['item_price'];


        $imgFile = $_FILES['item_image']['name'];
        $tmp_dir = $_FILES['item_image']['tmp_name'];
        $imgSize = $_FILES['item_image']['size'];

        if ($imgFile) {
            $upload_dir = 'item_images/'; // upload directory	
            $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
            $itempic = rand(1000, 1000000) . "." . $imgExt;
            if (in_array($imgExt, $valid_extensions)) {
                if ($imgSize < 50000000) {
                    if (unlink($upload_dir . $item_image_edit)) {

                        move_uploaded_file($tmp_dir, $upload_dir . $itempic);
                    } else {
                        echo "no such file or directory";
                    }
                } else {
                    $errMSG = "Sorry, your file is too large it should be less then 5MB";
                    echo "<script>alert('Sorry, your file is too large it should be less then 5MB')</script>";
                }
            } else {
                $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
            }
        } else {

            $itempic = $edit_row['item_image'];
        }



        if (!isset($errMSG)) {
            $query_update = "UPDATE `items` SET `item_name`='{$item_name}',`item_price`='{$item_price}',`item_image`='{$itempic}' WHERE item_id={$item_id}";
            // $sql_update = "UPDATE items SET item_name = $item_name,item_price = $item_price, item_image = $itempic WHERE item_id = $item_id";
            // UPDATE items SET item_name = "ka",item_price = "iel", item_image = "joei" WHERE item_id = 2;

            $execute = mysqli_query($conn, $query_update);

            if ($execute) {
?>
                <script>
                    alert('Successfully Updated ...');
                    window.location.href = 'items.php';
                </script>
<?php
            } else {
                $errMSG = "Sorry Data Could Not Updated !";
                echo "<script>alert('Sorry Data Could Not Updated !')</script>";
            }
        }
    }
} else {
    header("Location: items.php");
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
                <a class="navbar-brand" href="index.php">TaiTai Shop - Administrator Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.php"> &nbsp; &nbsp; &nbsp; Home</a></li>
                    <li><a data-toggle="modal" data-target="#uploadModal"> &nbsp; &nbsp; &nbsp; Upload Items</a></li>
                    <li class="active"><a href="items.php"> &nbsp; &nbsp; &nbsp; Item Management</a></li>
                    <li><a href="customers.php"> &nbsp; &nbsp; &nbsp; Customer Management</a></li>
                    <li><a href="orderdetails.php"> &nbsp; &nbsp; &nbsp; Order Details</a></li>
                    <li><a href="logout.php"> &nbsp; &nbsp; &nbsp; Logout</a></li>


                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#"><i class="fa fa-calendar"></i> <?php
                                                                    $Today = date('y:m:d');
                                                                    $new = date('l, F d, Y', strtotime($Today));
                                                                    echo $new; ?></a>

                    </li>
                    <!-- <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <? //php extract($_SESSION);
                                                                                                                //echo $admin_username; 
                                                                                                                ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">









            <div class="clearfix"></div>

            <form method="post" enctype="multipart/form-data" class="form-horizontal">


                <?php
                if (isset($errMSG)) {
                ?>

                <?php
                }
                ?>
                <div class="alert alert-info">

                    <center>
                        <h3><strong>Update Item</strong> </h3>
                    </center>

                </div>

                <table class="table table-bordered table-responsive">

                    <tr>
                        <td><label class="control-label">Name of Item.</label></td>
                        <td><input class="form-control" type="text" name="item_name" value="<?php echo $item_name_edit; ?>" required /></td>
                    </tr>

                    <tr>
                        <td><label class="control-label">Price.</label></td>
                        <td><input id="inputprice" class="form-control" type="text" name="item_price" value="<?php echo $item_price_edit; ?>" required /></td>
                    </tr>


                    <tr>
                        <td><label class="control-label">Image.</label></td>
                        <td>
                            <p><img class="img img-thumbnail" src="item_images/<?php echo $item_image_edit; ?>" height="150" width="150" /></p>
                            <input class="input-group" type="file" name="item_image" accept="image/*" />
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-primary">
                                <span class="glyphicon glyphicon-save"></span> Update
                            </button>

                            <a class="btn btn-danger" href="items.php"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>

                        </td>
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
    <!-- /#wrapper -->


    <!-- Mediul Modal -->
    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
        <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 style="color:white" class="modal-title" id="myModalLabel">Upload Items</h2>
                </div>
                <div class="modal-body">




                    <form enctype="multipart/form-data" method="post" action="additems.php">
                        <fieldset>


                            <p>Name of Item:</p>
                            <div class="form-group">

                                <input class="form-control" placeholder="Name of Item" name="item_name" type="text" required>


                            </div>








                            <p>Price:</p>
                            <div class="form-group">

                                <input id="priceinput" class="form-control" placeholder="Price" name="item_price" type="text" required>


                            </div>


                            <p>Choose Image:</p>
                            <div class="form-group">


                                <input class="form-control" type="file" name="item_image" accept="image/*" required />

                            </div>


                        </fieldset>


                </div>
                <div class="modal-footer">

                    <button class="btn btn-success btn-md" name="item_save">Save</button>

                    <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>


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