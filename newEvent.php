<?php

session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
}elseif(isset($_SESSION['email'])){
    $current_user= $_SESSION['email'];
}

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
        <div class="ui segment tall stacked very padded orange signup-form">
                <h4 class="ui header center aligned"><a href="index.php">Event <i class="circular eye orange icon"></i>Watch</a></h4>
        <div class="ui divider"></div>
        <form class="ui form" action="neweventdb.php" method="POST"> 
        <div class="field">
            <label>Event Name</label>
            <input name="event-name" type="text" placeholder="Event name">
        </div>
        <div class="inline fields">
                <label for="event-visibility">Event Visibility: </label>
                <div class="field">
                  <div class="ui radio orange checkbox event-visibility">
                    <input name="event-visibility" tabindex="0" class="hidden" type="radio" checked="">
                    <label>Public</label>
                  </div>
                </div>
                <div class="field">
                  <div class="ui radio orange checkbox event-visibility">
                    <input name="event-visibility" tabindex="0" class="hidden" type="radio">
                    <label>Private</label>
                  </div>
                </div>            
        </div>
        <div class="two fields">
            <div class="field">
                <label>Event Start Date</label>
                <input type="datetime-local" name="event-start" id="">
            </div>
            <div class="field">
                <label>Event End Date</label>
                <input type="datetime-local" name="event-end" id="">
            </div>
        </div>
        <div class="field">
                <div class="ui radio orange checkbox event-repit">
                  <input name="event-repit" tabindex="0" class="hidden" type="radio">
                  <label>It is nat a repited event!</label>
                </div>
        </div>

        <div class="field">
            <label>Phone Number</label>
            <input name="signup-phnumber" type="text" placeholder="Phone Number">
        </div>
        <div class="field">
            <label>Venue</label>
            <input name="event-venue" type="text" placeholder="Event Venue">
        </div>
        <div class="field">
            <div class="ui checkbox signup-check">
            <input tabindex="0" class="hidden" type="checkbox">
            <label>I agree to the <a href="http://">Terms</a> and <a href="http://">Conditions</a></label>
            </div>
        </div>
        <button class="ui button orange btn-login" type="submit">Create</button>
        </form>

    </div>
<!-- 
    <div class="ui segment  tall stacked orange signup-form2">
        <p>Already registered! <a href="login.php">Login</a> </p>
    </div> -->
    </div>


    <!-- ======================  JS Files ===================== -->
    <script src="js/jQuery.js"></script>
    <script src="js/semantic.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>