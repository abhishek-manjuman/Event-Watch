<?php

session_start();
if(!isset($_SESSION['email'])){
    header('location:event-organizer.php');
}elseif(isset($_SESSION['email'])){
    $current_user= $_SESSION['email'];
}

include "dbconnection.php";

mysqli_select_db($conn, 'eventwatch');

$sql_qr = "select type-name from event-type";
//
$result= mysqli_query($conn, $sql_qr);
$num = mysqli_num_rows($result);
while ($rows = mysqli_fetch_array($result)) {
  echo $result;
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
      <?php
      if(isset($_GET["success"]))
         {
          ?>
          <div class="ui center aligned header" style="margin-top: 20px;">
            <div class="ui green clearing inverted segment" style="width:40%; margin-left:auto; margin-right:auto;">
              New event is Uploaded successfuly.
            </div>
            </div>
          <?php
        }elseif (isset($_GET["filed"])) {
          ?>
          <div class="ui center aligned header" style="margin-top: 20px; ">
            <div class="ui red inverted segment" style="width:40%; margin-left:auto; margin-right:auto;">
              Event is not uploaded.
            </div>
            </div>
          <?php
        }
       ?>

        <div class="ui segment tall stacked very padded orange signup-form">
                <h4 class="ui header center aligned"><a href="index.php">Event <i class="circular eye orange icon"></i>Watch</a></h4>
                <h3 class="ui header center aligned" style="margin-top:0px;">
                    <div class="ui content">
                        Create New Event
                        <!-- <div class="sub header">
                            Create your Event-Watch account
                        </div> -->
                    </div>
                </h3>
        <div class="ui divider"></div>
        <form class="ui form" action="newEventDB.php" method="POST" enctype="multipart/form-data">
        <div class="field required">
            <label>Event Name</label>
            <input name="event-name" type="text" placeholder="Event name" required>
        </div>
        <div class="required field">
          <label for="">Event Type</label>
          <div class="ui search selection dropdown event-type-item">
            <input type="hidden" name="event-type" required>
            <i class="dropdown icon"></i>
            <div class="default text">Event Type</div>
            <div class="menu">
              <div class="item" data-value="Techenical">Techenical</div>
              <div class="item" data-value="Cultural">Cultural</div>
            </div>
            </div>
        </div>
        <!-- <div class="field required">
            <label>Event Organizer Name</label>
            <input name="event-organizer" type="text" placeholder="Event Organizer name">
        </div> -->
        <div class="inline fields required">
                <label for="event-visibility">Event Visibility: </label>
                <div class="field">
                  <div class="ui radio orange checkbox event-visibility">
                    <input name="event-visibility" tabindex="0" class="hidden" type="radio" value="public" checked="">
                    <label>Public</label>
                  </div>
                </div>
                <div class="field">
                  <div class="ui radio orange checkbox event-visibility">
                    <input name="event-visibility" tabindex="0" class="hidden" type="radio" value="private">
                    <label>Private</label>
                  </div>
                </div>
        </div>
        <div class="two fields">
            <div class="field required">
                <label>Event Start Date</label>
                <input type="date" name="event-start" id="" required>
            </div>
            <div class="field required">
                <label>Event End Date</label>
                <input type="date" name="event-end" id="" required>
            </div>
        </div>
        <div class="two fields">
            <div class="field required">
                <label>Event Start Time</label>
                <input type="time" name="event-start-time" id="" required>
            </div>
            <div class="field required">
                <label>Event End Time</label>
                <input type="time" name="event-end-time" id="" required>
            </div>
        </div>
        <div class="field required">
                <div class="ui radio orange checkbox event-repit">
                  <input name="event-repit" tabindex="0" class="hidden" type="radio" required>
                  <label>It is nat a repited event!</label>
                </div>
        </div>

        <div class="field">
            <label>Phone Number</label>
            <input name="phnumber" type="text" placeholder="Phone Number" required>
        </div>
            <div class="two fields">
                <div class="required field">
                  <label for="">Pin Number</label>
                  <input name="pin-number" type="number" placeholder="Pin Number*" required maxlength="6" minlength="10">
                </div>
                <div class="required field">
                    <!-- <label>Password</label> -->
                    <!-- <div class="ui left icon huge input">
                        <input name="signup-password" type="password" placeholder="Password" required>
                        <i class="icon lock"></i>
                    </div> -->
                    <label for="">Country</label>
                    <div class="ui search selection dropdown country-item">
                        <input name="event-country" type="hidden">
                        <i class="dropdown icon"></i>
                        <div class="default text">Select country</div>
                        <div class="menu">
                        <a class="item active">India</a>
                        <!-- <a class="item"></a>
                        <a class="item"></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="two fields">
                <div class="required field">

                  <label for="">State</label>
                    <div class="ui search selection dropdown state-item">
                        <input name="event-state" type="hidden" required>
                        <i class="dropdown icon"></i>
                        <div class="default text">Select State*</div>
                        <div class="menu">
                        <a class="item active">Uttar Pardesh</a>
                        <a class="item">Delhi</a>
                        <!-- <a class="item"></a> -->
                        </div>
                    </div>
                </div>
                <div class="required field">
                  <label for="">City</label>
                    <div class="ui search selection dropdown city-item">
                        <input name="event-city" type="hidden" required>
                        <i class="dropdown icon"></i>
                        <div class="default text">Select City*</div>
                        <div class="menu">
                        <a class="item active">Delhi</a>
                        <a class="item">Greater Noida</a>
                        <a class="item">Noida</a>
                        </div>
                    </div>
                </div>
            </div>
        <div class="field required">
            <label>Venue</label>
            <input name="event-venue" type="text" placeholder="Event Venue" required>
        </div>
        <div class="field required">
          <label>Event Details</label>
          <textarea name="event-detail" rows="2" required></textarea>
        </div>
        <div class="required field">
          <label for="event-pic">Image</label>
          <div class="ui left icon big input">
              <input type="file" name="banner" required>
              <i class="file image icon"></i>
          </div>
        </div>
        <div class="required field">
          <label for="">Total Seats</label>
          <input type="number" name="total-seats" placeholder="Total Seats">
        </div>
        <div class="required field">
          <label for="">Event Charge</label>
          <input type="number" name="event-charge" placeholder="Event Charge" required>
        </div>
        <div class="field required">
            <div class="ui checkbox signup-check">
            <input tabindex="0" name="tearm" id="tearm" class="hidden" type="checkbox" required>
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
