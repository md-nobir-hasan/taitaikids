<?php
session_start();

?>




<form action="" method="POST">

    <div>
        <span style="color: red; font-size: 25px;"> * </span>
        <label for="name"> Enter Your Name : </label>
        <input type="text" name="name" id="full_name" placeholder="Full Name" class="form-control" required>
    </div>
    <br>
    <br>
    <div>
        <span style="color: red; font-size: 25px;"> * </span> <label for="phone_num"> Enter Your Phone Number : </label>
        <input type="tel" name="phone_num" id="phone_num" pattern="[0-9]{10}" required placeholder="format: 1988406007 (no 0 in fast possition" class="form-control">
        <span id="err_msg_phone_num" style="color: red; display: none;">Enter a Phone Number</span>
    </div>
    <br>
    <br>
    <div>
        <span style="color: red; font-size: 25px;"> * </span>
        <label for="email"> Enter Your E-Mail : </label>
        <input type="email" name="email" id="email" placeholder=" E-Mail" class="form-control" required>
        <span id="err_msg_email" style="color: red; display: none;">Enter a valid e-mail</span>
    </div>
    <br>
    <br>
    <div>
        <span style="color: red; font-size: 25px;"> * </span>
        <label for="address"> Enter Your Address : </label>
        <br>
        <input type="text" id="address" name="address" rows="4" cols="50" required placeholder="Enter your accurate address" class="form-control">
    </div>
    <br>
    <br>
    <div>
        <span style="color: red; font-size: 25px;"> * </span>
        <label for="password"> Enter Password : </label>
        <input type="password" name="password" id="password" placeholder="Remember me" class="form-control" required>
        <span id="err_msg_password" style="color: red; display: none;">Make password with only letter and number</span>
    </div>
    <br>
    <br>
    <div>
        <span>If you have an account,<a style="font-size: 18px;font-weight: bold;color: green;" href="./user_login.php">Login now</a> </span>
    </div>


</form>