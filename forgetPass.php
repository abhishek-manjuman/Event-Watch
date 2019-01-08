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
        

    <div class="ui container">
        <div class="ui segment tall stacked very padded orange login-form">
        <h4 class="ui header center aligned"><a href="index.php">Event <i class="circular eye orange icon"></i>Watch</a></h4>
        <h1 class="ui header center aligned" style="margin-top:0px;">
            <div class="ui content">
                Password Recovery
                <div class="sub header">
                    Recover your password by your Email
                </div>
            </div>
        </h1>
        <div class="ui hidden divider"></div>        
        <div class="ui horizontal divider">Enter your register Email Address</div>
        <form class="ui form" action="forgetPassdb.php" method="POST">
        <div class="field">
            <!-- <label>Email</label> -->
            <div class="ui left icon huge input">
                <input name="log-email" type="email" placeholder="Email Address" autofocus>
                <i class="icon envelope"></i>
            </div>
        </div>
        <div class="ui header right aligned">
        <button class="ui button inverted orange btn-login" type="submit">Send</button>
        </div>
    </form>
    <div class="ui divider horizontal">try diffrent way!</div>
     <p class="forget-pass">Recover your password by phone number! <a href="forgetPassPhone.php">Click hear</a></p> 
    </div>

    <div class="ui segment center aligned login-form2">
            <p>Go to! <a href="signup.php">Sign Up</a> / <a href="login.php">Sign In</a> </p>
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