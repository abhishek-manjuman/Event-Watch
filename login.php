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
                Sign In
                <div class="sub header">
                    Sign In your Event-Watch account
                </div>
            </div>
        </h1>
        <!-- <div class="ui hidden divider"></div>         -->
        <div class="ui horizontal divider">Sign In with social accounts</div>
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
          </button>
        <div class="ui divider horizontal">Sign in with Event-Watch account</div>
        <form class="ui form" action="logindb.php" method="POST">
        <div class="field">
            <!-- <label>Email</label> -->
            <div class="ui left icon huge input">
                <input name="log-email" type="text" placeholder="Email / Phone number" autofocus>
                <i class="icon user"></i>
            </div>
        </div>
        <div class="field">
            <!-- <label>Password</label> -->
            <div class="ui left icon huge input">
                <input name="log-password" type="password" placeholder="Password">
                <i class="icon lock"></i>
            </div>
        </div>
        <!-- <div class="field">
            <div class="ui checkbox login-check">
            <input tabindex="0" class="hidden" type="checkbox">
            <label>remamber me</label>
            <label for="">forget password?</label>
            </div>
        </div> -->
        <button class="ui button inverted orange btn-login" type="submit">Login</button>
    </form>
    <div class="ui divider horizontal">password forget?</div>
     <p class="forget-pass">Recover your password! <a href="forgetPass.php">Click hear</a></p> 
    </div>

    <div class="ui segment center aligned login-form2">
            <p>Not registered yet! <a href="signup.php">Sign Up</a> </p>
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