<?php
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Event Type</title>

    <!-- =======================  CSS Files ==================== -->
    <link rel="stylesheet" href="css/semantic.min.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

    <div class="ui container">
      <?php
      if(isset($_GET["data_inserted"]))
         {
          ?>
          <div class="ui center aligned header" style="margin-top: 20px;">
            <div class="ui green clearing inverted segment" style="width:40%; margin-left:auto; margin-right:auto;">
              New event type is added successfuly.
            </div>
            </div>
          <?php
        }elseif (isset($_GET["data_failed"])) {
          ?>
          <div class="ui center aligned header" style="margin-top: 20px; ">
            <div class="ui red inverted segment" style="width:40%; margin-left:auto; margin-right:auto;">
              Event Type is not added.
            </div>
            </div>
          <?php
        }
       ?>
        <div class="ui segment tall stacked very padded orange signup-form">
                <h4 class="ui center aligned header"><a href="index.php">Event <i class="circular eye orange icon"></i>Watch</a></h4>
    <h1 class="ui center aligned header" style="margin-top:0px;">
         <div class="content">
             <div class="sub header">
               New Event Type
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
    <div class="ui divider horizontal">Event Type</div>
    <form class="ui form" action="addeventtypeDB.php" method="POST">
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
        <label for="">Event Type</label>
        <div class="ui  input">
            <input name="type-name" type="text" placeholder="Event type" required>
        </div>
    </div>
    <div class="field">
        <!-- <label>Phone Number</label> -->
        <label for="">Type Detail</label>
        <div class="ui input">
            <textarea  name="type-detail" rows="2" required placeholder="write short detail about type max(250 word)"></textarea>
        </div>
    </div>
    <div class="field">
      <label for="">Event Mode</label>
      <div class="ui search selection dropdown state-item">
          <input name="event-mode" type="hidden">
          <i class="dropdown icon"></i>
          <div class="default text">Select Event Mode</div>
          <div class="menu">
          <a class="item active">Online</a>
          <a class="item">OffLine</a>
          <a class="item">Both</a>
          <!-- <a class="item"></a> -->
          </div>
      </div>
    </div>
    <div class="ui header right aligned" style="margin:0;">
        <button class="ui button inverted orange btn-login" type="submit">Add Type</button>
    </div>
    </form>

    </div>
    <!--
    <div class="ui segment tall stacked orange signup-form2">
    <p>Service Provider! <a href="serviceProvider.php">Register Hear</a> </p>
    </div> -->
    </div>

    <!-- ======================  JS Files ===================== -->
    <script src="js/jQuery.js"></script>
    <script src="js/semantic.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
