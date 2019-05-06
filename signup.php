<?php

session_start();
include "dbconnection.php";
if(isset($_SESSION['email'])){
    header('location:index.php');
}elseif(!isset($_SESSION['email'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Watch</title>

    <!-- =======================  CSS Files ==================== -->
    <link rel="stylesheet" href="css/semantic.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <div class="ui container fluid">


        </div>

        <div class="ui container">
          <?php
          if(isset($_GET["already_exist"]))
             {
              ?>
              <div class="ui center aligned header" style="margin-top: 20px;">
              <div class="ui pointing below red basic label">
                Email or Phone Number already registered! Go to <p><a href="login.php">Sign In.</a> </p>
              </div>
            </div>
              <?php
             }
           ?>
            <div class="ui segment tall stacked very padded orange signup-form">
                    <h4 class="ui center aligned header"><a href="index.php">Event <i class="circular eye orange icon"></i>Watch</a></h4>
        <h1 class="ui center aligned header" style="margin-top:0px;">
             <div class="content">
                 Sign Up
                 <div class="sub header">
                     Sign up yourself on Event-Watch
                 </div>
             </div>
        </h1>

        <!-- <div class="ui divider horizontal">Continue account with</div>
        <button class="ui google plus button">
            <i class="google plus icon"></i>
            Google
        </button>
        <button class="ui linkedin button">
            <i class="linkedin icon"></i>
            LinkedIn
        </button>
        <button class="ui facebook button">
            <i class="facebook icon"></i>
            Facebook
        </button> -->
        <div class="ui divider horizontal">Sign up with email and password</div>
        <form class="ui form" action="signupdb.php" method="POST">
        <!-- <div class="field">
         <label>Enrolment Number</label>
            <div class="ui left icon huge input">
                <input name="signup-enrolment-no" type="text" placeholder="Enrolment number" required autofocus>
                <i class="university icon"></i>
            </div>
            <div class="ui pointing red basic label" id="enrolment-err" style="display: none;">
                This enrolment number is already registered!
            </div>
        </div> -->
        <div class="field">
            <!-- <label>Email</label> -->
            <div class="ui left icon huge input">
                <input name="signup-email" type="email" placeholder="Email" required onblur="error(this.value)">
                <i class="icon envelope"></i>
            </div>
            <div class="ui pointing red basic label" id="email-err" style="display: none;">
            </div>
        </div>
        <div class="field">
            <!-- <label>Phone Number</label> -->
            <div class="ui left icon huge input">
                <input name="signup-phnumber" type="number" placeholder="Phone Number" required maxlength="10" onblur="error(this.value)" minlength="10">
                <i class="icon phone"></i>
            </div>
            <div class="ui pointing red basic label" id="phnumber-err" style="display: none;">
                This phone nuumber is already registered!
            </div>
        </div>
        <div class="field">
            <!-- <label>Password</label> -->
            <div class="ui left icon huge input">
                <input name="signup-password" type="password" placeholder="Password" required>
                <i class="icon lock"></i>
            </div>
        </div>
        <div class="field">
            <div class="ui checkbox signup-check">
            <input tabindex="0" name="signup-tearms" class="hidden" type="checkbox" required>
            <label>I agree to the <a href="tearms.php">Terms</a> and <a href="tearms.php">Conditions</a></label>
            </div>
        </div>
        <div class="ui header right aligned" style="margin:0;">
            <button class="ui button inverted orange btn-login" type="submit">Sign Up</button>
        </div>
        </form>

    </div>
<!--
    <div class="ui segment tall stacked orange signup-form2">
        <p>Service Provider! <a href="serviceProvider.php">Register Hear</a> </p>
    </div> -->
    <div class="ui segment signup-form2">
            <p>Already registered! <a href="login.php">Sign In</a> </p>
    </div>
    </div>


    <!-- ======================  JS Files ===================== -->
    <script src="js/jQuery.js"></script>
    <script src="js/semantic.min.js"></script>
    <script src="js/main.js"></script>
</body>


</html>

<?php
}
?>
