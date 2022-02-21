<?php
session_start();

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


	<script type="text/javascript" src="jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="jquery.fancybox.css?v=2.1.5" media="screen" />

	<link rel="stylesheet" type="text/css" href="jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="jquery.fancybox-buttons.js?v=1.0.5"></script>


	<link rel="stylesheet" type="text/css" href="jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="jquery.fancybox-thumbs.js?v=1.0.7"></script>


	<script type="text/javascript" src="jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title: {
						type: 'outside'
					},
					overlay: {
						speedOut: 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect: 'none',
				closeEffect: 'none',

				helpers: {
					title: {
						type: 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS: 'fancybox-custom',
				closeClick: true,

				openEffect: 'none',

				helpers: {
					title: {
						type: 'inside'
					},
					overlay: {
						css: {
							'background': 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect: 'elastic',
				openSpeed: 150,

				closeEffect: 'elastic',
				closeSpeed: 150,

				closeClick: true,


			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect: 'none',
				closeEffect: 'none',

				prevEffect: 'none',
				nextEffect: 'none',

				closeBtn: false,

				helpers: {
					title: {
						type: 'inside'
					},
					buttons: {}
				},

				afterLoad: function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect: 'none',
				nextEffect: 'none',

				closeBtn: false,
				arrows: false,
				nextClick: true,

				helpers: {
					thumbs: {
						width: 50,
						height: 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			 */
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect: 'none',
					closeEffect: 'none',
					prevEffect: 'none',
					nextEffect: 'none',

					arrows: false,
					helpers: {
						media: {},
						buttons: {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href: 'iframe.html',
					type: 'iframe',
					padding: 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([{
					href: '1_b.jpg',
					title: 'My title'
				}, {
					href: '2_b.jpg',
					title: '2nd title'
				}, {
					href: '3_b.jpg'
				}], {
					helpers: {
						thumbs: {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>




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
				<a class="navbar-brand" href="index.php">TaiTai Shop </a>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					<li class="active">
						<!-- <a href="index.php"> &nbsp; <span class='glyphicon glyphicon-home'></span> Home</a> -->
						<?php

						if (isset($_SESSION['phone_num'])) {
							echo "<a href='index.php'> &nbsp; <span class='glyphicon glyphicon-home'></span> Home</a>";
						} else {
							echo "<a href='index.php'> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> Shop Now</a>";
						}
						?>
					</li>
					<li>
						<!-- <a href="#"> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> Shop Now</a> -->
					</li>
					<li>
						<!-- <a href="cart_items.php"> &nbsp; <span class='fa fa-cart-plus'></span> Shopping Cart Lists</a> -->
						<?php

						if (isset($_SESSION['phone_num'])) {
							echo " <a href='cart_items.php'> &nbsp; <span class='fa fa-cart-plus'></span> Shopping Cart Lists</a>";
						} else {
							echo "  <a class='sign_up' > &nbsp; <span class='glyphicon glyphicon-list-alt'></span> Sign Up</a>";
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
						// 	echo "<a href='view_purchased.php'> &nbsp; <span class='glyphicon glyphicon-eye-open'></span> Previous Items Ordered</a>";
						// }
						?>
					</li>
					<li>
						<!-- <a data-toggle="modal" data-target="#setAccount"> &nbsp; <span class='fa fa-gear'></span> Account Settings</a> -->
						<?php

						// if (isset($_SESSION['phone_num'])) {
						// 	echo "<a data-toggle='modal' data-target='#setAccount'> &nbsp; <span class='fa fa-gear'></span> Account Settings</a>";
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
						<!-- <a  class="admin_modul"  href="#">Admin</a> -->
						<?php
						if (!isset($_SESSION['phone_num'])) {
							echo "<a  class='admin_modul'>Admin</a>";
						} ?>
					</li>
					<li class="dropdown messages-dropdown">
						<a href="#">About Us</a>
					</li>
					<li class="dropdown user-dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-shopping-cart'></span>Contact </b></a>

					</li>
				</ul>
				</li>
				</ul>
			</div>
		</nav>


		<div id="page-wrapper">


			<div class="alert alert-default" style="color:white;background-color:#008CBA">
				<center>
					<h3> <span class="glyphicon glyphicon-shopping-cart"></span> This is our kids item stocks, Shop now!</h3>
				</center>
			</div>

			<br />


			<?php







			$conn = mysqli_connect("localhost", "belgachi_taitai", "t)iK).u@*+-i");
			mysqli_select_db($conn, "belgachi_taitai");




			$query = mysqli_query($conn, "select * from items");


			while ($query2 = mysqli_fetch_array($query)) {

				echo "<div class='col-sm-3'><div class='panel panel-default' style='border-color:#008CBA;'>
            <div class='panel-heading' style='color:white;background-color : #033c73;'>
            <center> 
<textarea style='text-align:center;background-color: white;' class='form-control' rows='1' disabled>" . $query2['item_name'] . "</textarea>
			</center>
            </div>
            <div class='panel-body'>
           <a class='fancybox-buttons' href='./Admin/item_images/" . $query2['item_image'] . "' data-fancybox-group='button' title='Page " . 1 . "- " . $query2['item_name'] . "'>
					
					<img src='./Admin/item_images/" . $query2['item_image'] . "' class='img img-thumbnail'  style='width:350px;height:150px;' />
					</a>
				
					
					<center><h4> Price: &#8369; " . $query2['item_price'] . " </h4></center>
		
					
										<a class='btn btn-block btn-danger' href='./add_to_cart.php?cart=" . $query2['item_id'] . "'><span class='glyphicon glyphicon-shopping-cart'></span> Add to cart</a>
            </div>
          </div>
        </div>";
			}

			echo "<div class='container'>";
			echo "</div>";
			?>




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
	<!-- Jquery library  -->
	<script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




	<script>
		//
		//login as admin
		//
		$(document).ready(function() {
			$(".admin_modul").on("click", function() {
				// alert("got it");

				var options = {
					ajaxPrefix: ''
				};

				new Dialogify('./ajax_file/modal_body_admin_login.php', options)
					.title("Login as admin")
					.buttons([{
							text: "Cancle",
							type: Dialogify.BUTTON_DANGER,
							click: function(e) {
								this.close();
							}
						},
						{
							text: 'Login',
							type: Dialogify.BUTTON_PRIMARY,
							click: function(e) {
								var regex_password = /[a-z-0-9]+/mi;

								var admin_id = $('#admin_id').val();
								var password = $('#password').val();

								if (!regex_password.test(admin_id)) {
									alert("Input your Admin id");
								} else if (!regex_password.test(password)) {
									alert("Enter your correct password");
								} else {
									$.ajax({
										url: './ajax_file/php_admin_login.php',
										method: "POST",
										data: {
											admin_id: admin_id,
											password: password
										},
										// dataType:'json',
										// contentType: false,
										// cache: false,
										// processData: false,
										success: function(data) {
											if (data == 1) {
												alert("Successfully loged in");
												window.open("./Admin/index.php", "_self");
											} else {
												alert("Your Admin ID and password don't match");
											}


										}
									});
								}
							}
						}

					]).showModal();
			});
		});


		//
		//Sign Up
		//
		$(document).ready(function() {
			$(".sign_up").on("click", function() {
				// var id = $(this).attr('id');
				// var name_item = $("#name_item").val();
				// var price_item = $("#price_item").val();
				// var quantity_item = $("#quantity_item").val();

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
											window.open("index.php", "_self")

											// $.ajax({
											// 	cache: false,
											// 	url: "./save_order.php",
											// 	method: "POST",
											// 	data: {
											// 		phone_num: phone_num,
											// 		order_name: name_item,
											// 		order_price: price_item,
											// 		order_quantity: quantity_item
											// 	},
											// 	success: function(data) {
											// 		if (data == 1) {
											// 			window.open("cart_items.php", "_self");
											// 		} else {
											// 			alert("Your Admin ID and password don't match");
											// 		}
											// 	}
											// });

										}
									});
								}
							}
						}

					]).showModal();
			});
		});
	</script>


</body>

</html>