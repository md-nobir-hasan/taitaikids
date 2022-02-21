<?php
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>TaiTai Shop</title>
  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon" />
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <link href="assets/css/flexslider.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />

</head>

<body>

  <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- //here logo is nedded -->
        <div id="logo">
          <h1>TaiTai Shop</h1>
        </div>
        <!-- <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/logoz.png" alt="" /></a> -->
      </div>
      <div class="navbar-collapse collapse move-me">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#home">HOME</a></li>
          <li><a href="#testimonials-sec">TESTIMONIALS</a></li>
          <li><a href="#faculty-sec">DEVELOPER</a></li>
          <li><a href="#brand-sec">BRANDS</a></li>
          <li><a href="#course-sec">CONTACT US</a></li>

        </ul>
      </div>

    </div>
  </div>

  <div class="home-sec" id="home">
    <div class="overlay">
      <div class="container">
        <div class="row text-center ">

          <div class="col-lg-12  col-md-12 col-sm-12">

            <div class="flexslider set-flexi" id="main-section">
              <ul class="slides move-me">
                <!-- Slider 01 -->
                <li>
                  <h3>High Quality TaiTai Products</h3>
                  <h1>WHAT ARE YOU WAITING FOR? SHOP NOW!</h1>
                  <a href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#ln">
                    SIGN IN
                  </a>
                  <a href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal" data-target="#su">
                    SIGN UP
                  </a>

                  <a href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                    ADMIN
                  </a>
                </li>
                <!-- End Slider 01 -->

                <!-- Slider 02 -->
                <li>
                  <h3>High Quality TaiTai Products</h3>
                  <h1>WE HAVE WHAT YOU NEED</h1>
                  <a href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#ln">
                    SIGN IN
                  </a>
                  <a href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal" data-target="#su">
                    SIGN UP
                  </a>

                  <a href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                    ADMIN
                  </a>
                </li>
                <!-- End Slider 02 -->

                <!-- Slider 03 -->
                <li>
                  <h3>High Quality TaiTai Products</h3>
                  <h1>WE HAVE ALL BRANDS</h1>
                  <a href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#ln">
                    SIGN IN
                  </a>
                  <a href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal" data-target="#su">
                    SIGN UP
                  </a>
                  <a href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                    ADMIN
                  </a>
                </li>
                <!-- End Slider 03 -->
              </ul>
            </div>




          </div>

        </div>
      </div>
    </div>

  </div>
  <!--HOME SECTION END-->
  <div class="tag-line">
    <div class="container">
      <div class="row  text-center">

        <div class="col-lg-12  col-md-12 col-sm-12">

          <h2 data-scroll-reveal="enter from the bottom after 0.1s"><i class="fa fa-circle-o-notch"></i> WELCOME TO THE TaiTai Shop <i class="fa fa-circle-o-notch"></i> </h2>
        </div>
      </div>
    </div>

  </div>
  <!--HOME SECTION TAG LINE END-->
  <div id="testimonials-sec" class="container set-pad">
    <div class="row text-center">
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
        <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line">TESTIMONIALS </h1>
        <p data-scroll-reveal="enter from the bottom after 0.3s">
          Have a look what our customer's said about us.
        </p>
      </div>

    </div>
    <!--/.HEADER LINE END-->


    <div class="row">


      <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="about-div">
          <center> <img class="img img-circle" src="assets/img/person-1.jpg" style="width:100px;height:100px;" />
            <h3>Paul Rodriguez</h3>
            <hr />
            <hr />
            <p>
              This company is one of the best in the market they give us
              what we need on our skateboards.
            </p>
          </center>
          <a class="btn btn-info btn-set">SLS 2016 Munich Champion</a>
        </div>
      </div>


      <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="about-div">
          <center> <img class="img img-circle" src="assets/img/person-2.jpg" style="width:100px;height:100px;" />
            <h3>Tony <br />Hawk</h3>
            <hr />
            <hr />
            <p>
              One time I have mistakenly order a wrong set up but luck they immediately notify me.
            </p>
          </center>
          <br />
          <a class="btn btn-info btn-set">Legendary Skateboarder</a>
        </div>
      </div>


      <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="about-div">
          <center> <img class="img img-circle" src="assets/img/person-3.png" style="width:100px;height:100px;" />
            <h3>Leticia <br /> Bufoni</h3>
            <hr />
            <hr />
            <p>
              They are so flexible, approachable they can adjust to my schedule they value trust.
            </p>
          </center>
          <a class="btn btn-info btn-set">2015 SLS Women Division Champion</a>
        </div>
      </div>

      <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="about-div">
          <center> <img class="img img-circle" src="assets/img/person-4.jpg" style="width:100px;height:100px;" />
            <h3>Luan <br />Olivera</h3>
            <hr />
            <hr />
            <p>They deliver so fast and the price of the items are low.</p>

          </center>
          <br />
          <br />
          <a class="btn btn-info btn-set">SLS 2019 Champion</a>
        </div>
      </div>


    </div>
  </div>
  <!-- FEATURES SECTION END-->
  <div id="faculty-sec">
    <div class="container set-pad">
      <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
          <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line"> See the video to shop</h1>
          <p data-scroll-reveal="enter from the bottom after 0.3s">

          </p>
        </div>

      </div>
      <!--/.HEADER LINE END-->

      <div class="row">

        <iframe width="560" height="315" src="https://www.youtube.com/embed/_-BlniawWJg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <!-- <div class="col-lg-6  col-md-6 col-sm-6" data-scroll-reveal="enter from the bottom after 0.4s">
          <div class="faculty-div">
            <img src="assets/img/profile2.jpg" class="img-rounded" style="width:230px;height:200px;" />
            <h3>EDMARIE JAEL</h3>
            <hr />
            <h4>BSIT<br />ICE Department</h4>
            <p>
              Edmarie Jael,is the designer of this site.
              She studied at Davao Oriental State College of Science and Technology (DOSCST) and taking up Bachelor of Science in Information Technology (BSIT).
              She specialized in Web Development.

            </p>
          </div>
        </div>
        <div class="col-lg-6  col-md-6 col-sm-6" data-scroll-reveal="enter from the bottom after 0.5s">
          <div class="faculty-div">
            <img src="assets/img/profile1.jpg" class="img-rounded" style="width:230px;height:200px;" />
            <h3>CAESAR JAN ADLAWAN</h3>
            <hr />
            <h4>BSIT<br />ICE Department</h4>
            <p>
              Caezar Jan Adlawan,is the developer of this site.
              She studied at Davao Oriental State College of Science and Technology (DOSCST) and taking up Bachelor of Science in Information Technology (BSIT).
              He specialized in Web Development.

            </p>
          </div>
        </div> -->


      </div>
    </div>
  </div>

  <div id="brand-sec" class="container set-pad">
    <div class="row text-center">
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
        <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line">Brands</h1>
        <p data-scroll-reveal="enter from the bottom after 0.3s">
          You can choose your favorite brand.
        </p><br />


      </div>

    </div>
    <!--/.HEADER LINE END-->

    <div class="container">
      <div class="row">



        <img class="img img-rounded img-responsive" src="assets/img/brandx.png" style="width:2000px;height:500px;" />



        <div class="col-lg-12">


        </div>

      </div>
    </div>
  </div>
  <br />
  <!-- FACULTY SECTION END-->
  <div id="course-sec" class="container set-pad">
    <div class="row text-center">
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Contact Us</h1>
        <p data-scroll-reveal="enter from the bottom after 0.3s">
          If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.
          <br />For more details. See the contact information below.
        </p>
      </div>

    </div>
    <!--/.HEADER LINE END-->

    <br />

    <div class="container">
      <div class="row set-row-pad">
        <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

          <h2><strong>Our Location </strong></h2>
          <hr />
          <div>
            <h4>TaiTai-Shop, Belgachi. Chuadanga</h4>
            <h4>Khulna,Bangladesh</h4>
            <h4>7200</h4>

          </div>


        </div>
        <div class=" col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

          <h2><strong>Feedbacks </strong></h2>
          <hr />
          <div>
            <h4><strong>Call:</strong> 01988406007 </h4>
            <h4><strong>Email: </strong>taitai@gmail.com</h4>
          </div>
        </div>


      </div>
    </div>


  </div>
  </div>
  <!-- COURSES SECTION END-->
  <div class="modal fade" id="su" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
    <div class="modal-dialog modal-sm">
      <div style="color:white;background-color:#008CBA" class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Registration Form</h4>
        </div>
        <div class="modal-body">


          <form role="form" method="post" action="register.php">
            <fieldset>

              <div class="form-group">
                <input class="form-control" placeholder="Firstname" name="ruser_firstname" type="text" required>
              </div>

              <div class="form-group">
                <input class="form-control" placeholder="Lastname" name="ruser_lastname" type="text" required>
              </div>

              <div class="form-group">
                <input class="form-control" placeholder="Address" name="ruser_address" type="text" required>
              </div>

              <div class="form-group">
                <input class="form-control" placeholder="Email" name="ruser_email" type="email" required>
              </div>

              <div class="form-group">
                <input class="form-control" placeholder="Password" name="ruser_password" type="password" required>
              </div>

            </fieldset>


        </div>
        <div class="modal-footer">

          <button class="btn btn-md btn-warning btn-block" name="register">Sign Up</button>

          <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Script -->


  <div class="modal fade" id="ln" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
    <div class="modal-dialog modal-sm">
      <div style="color:white;background-color:#008CBA" class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 style="color:white" class="modal-title" id="myModalLabel">Customer Login</h4>
        </div>
        <div class="modal-body">


          <form role="form" method="post" action="userlogin.php">
            <fieldset>


              <div class="form-group">
                <input class="form-control" placeholder="Email" name="user_email" type="email" required>
              </div>

              <div class="form-group">
                <input class="form-control" placeholder="Password" name="user_password" type="password" required>
              </div>

            </fieldset>


        </div>
        <div class="modal-footer">

          <button class="btn btn-md btn-warning btn-block" name="user_login">Sign In</button>

          <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
          </form>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="an" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
    <div class="modal-dialog modal-sm">
      <div style="color:white;background-color:#008CBA" class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 style="color:white" class="modal-title" id="myModalLabel">Administrator Credentials</h4>
        </div>
        <div class="modal-body">


          <form role="form" method="post" action="adminlogin.php">
            <fieldset>


              <div class="form-group">
                <input class="form-control" placeholder="Username" name="admin_username" type="text" required>
              </div>

              <div class="form-group">
                <input class="form-control" placeholder="Password" name="admin_password" type="password" required>
              </div>

            </fieldset>


        </div>
        <div class="modal-footer">

          <button class="btn btn-md btn-warning btn-block" name="admin_login">Login</button>

          <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br />
  <br />
  <br />
  <!-- Script -->
  <!-- CONTACT SECTION END-->
  <div id="footer">
    &copy 2022 MDNH SD| All Rights Reserved | <a style="color: #fff" target="_blank">Design by : MDNH Team</a>
  </div>
  <!-- FOOTER SECTION END-->

  <!--  Jquery Core Script -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!--  Core Bootstrap Script -->
  <script src="assets/js/bootstrap.js"></script>
  <!--  Flexslider Scripts -->
  <script src="assets/js/jquery.flexslider.js"></script>
  <!--  Scrolling Reveal Script -->
  <script src="assets/js/scrollReveal.js"></script>
  <!--  Scroll Scripts -->
  <script src="assets/js/jquery.easing.min.js"></script>
  <!--  Custom Scripts -->
  <script src="assets/js/custom.js"></script>
</body>

</html>