<?php
session_start();

if (!$_SESSION['admin_id']) {

	header("Location: ../index.php"); //redirect to login page to secure the welcome page without login access.
}


include("../db_conection.php");

if (isset($_POST['item_save'])) {
	$item_name = $_POST['item_name'];
	$item_price = $_POST['item_price'];


	$check_item = "select * from items WHERE item_name='$item_name'";
	$run_query = mysqli_query($conn, $check_item);

	if (mysqli_num_rows($run_query) > 0) {
		echo "<script>alert('Item is already exist, Please try another one!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit();
	}

	$imgFile = $_FILES['item_image']['name'];
	$tmp_dir = $_FILES['item_image']['tmp_name'];
	$imgSize = $_FILES['item_image']['size'];

	$upload_dir = 'item_images/';
	$imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
	$itempic = rand(1000, 1000000) . "." . $imgExt;




	if (in_array($imgExt, $valid_extensions)) {

		if ($imgSize < 50000000) {
			move_uploaded_file($tmp_dir, $upload_dir . $itempic);
			$saveitem = "insert into items (item_name,item_price,item_image,item_date) VALUE ('$item_name','$item_price','$itempic',CURDATE())";
			mysqli_query($conn, $saveitem);
			echo "<script>alert('Data successfully saved!')</script>";
			echo "<script>window.open('items.php','_self')</script>";
		} else {

			echo "<script>alert('Sorry, your file is too large.')</script>";
			echo "<script>window.open('items.php','_self')</script>";
		}
	} else {

		echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
		echo "<script>window.open('items.php','_self')</script>";
	}
}
