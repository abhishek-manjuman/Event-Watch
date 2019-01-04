<?php

session_start();
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

                <h1><a href="index.php">Event <i class="circular eye orange icon"></i>Watch</a></h1>

    </div>

    <div class="ui container">
        <div class="ui segment piled orange signup-form">
        <h2 class="ui center aligned icon header">
            <i class="circular user plus orange icon" ></i>
            Sign Up
        </h2>
        
        <div class="ui divider"></div>
        <form class="ui form" action="Ssignupdb.php" method="POST"> 
        <div class="field">
            <label>Email</label>
            <input name="Ssignup-email" type="email" placeholder="Enter your Email Address" required>
        </div>
        <div class="field">
            <label>Phone Number</label>
            <input name="Ssignup-phnumber" type="text" placeholder="Enter your Phone Number" required>
        </div>
        <div class="field">
            <label>Online Store Name</label>
            <input name="Ssignup-OSName" type="text" placeholder="Enter your Online store name" required>
        </div>
        <div class="field">
            <label>Password</label>
            <input name="Ssignup-password" type="password" placeholder="Enter your password Password" required>
        </div>
        <div class="field">
            <div class="ui checkbox signup-check">
            <input tabindex="0" class="hidden" type="checkbox" required>
            <label>I agree to the <a href="tearms.php">Terms</a> and <a href="tearms.php">Conditions</a></label>
            </div>
        </div>
        <button class="ui button orange btn-login" type="submit">Sign Up</button>
        </form>

    </div>

    <div class="ui segment tall stacked orange signup-form2">
        <p>Service Provider!<a href="serviceProvider.php">Register Hear</a> </p>
    </div>
    <div class="ui segment tall stacked orange signup-form2">
            <p>Already registered! <a href="login.php">Login</a> </p>
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