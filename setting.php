
<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
}else{
    if(isset($_SESSION['email'])){
        $current_user = $_SESSION['email'];
        }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Watch || Tearms</title>

    <!-- =======================  CSS Files ==================== -->
    <link rel="stylesheet" href="css/semantic.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <?php
    include "header.php";
    ?>
    <div class="ui container">
      <div class="ui segments">
          <div class="ui clearing segment  secondary"> 
              <h1 class="ui left floated header">
                  <div class="content">Settings</div>
              </h1>
              <h4 class="ui right floated header">
                  <div class="content">
                      <a class="ui label inverted orange" href="userdashboard.php">Back to profile</a>
                  </div>
              </h4>
          </div>
          <div class="ui segment">
              <div class="ui grid">
                  <div class="four wide column">
                    <div class="ui vertical secondary top orange attached tabular pointing menu setting">
                        <a class=" item active" data-tab="genral_setting">
                            Genral setting
                        </a>
                        <a class="  item" data-tab="change-password">
                            Change Password
                        </a>
                        <a class="item" data-tab="friend">
                            Friends
                        </a>
                    </div>
                  </div>
                  <div class="twelve wide column">
                      <div class="ui segments top attached active tab" data-tab="genral_setting">
                          <div class="ui segment secondary">
                              <a class="ui header">
                                  <div class="content">Genral Setting</div>
                              </a>
                          </div>
                          <div class="ui segment">

                          </div>
                      </div>
                      <div class="ui segments top attached tab" data-tab="change-password" style="margin-top:0;">
                          <div class="ui segment secondary">
                              <a class="ui header">
                                  <div class="content">Change Password</div>
                              </a>
                          </div>
                          <div class="ui segment"></div>
                      </div>
                      <div class="ui segments top attached tab" data-tab="friend" style="margin-top:0;">
                          <div class="ui segment secondary">
                              <a class="ui header">
                                  <div class="content">Friends</div>
                              </a>
                          </div>
                          <div class="ui segment"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>

    <!-- ======================  JS Files ===================== -->
    <script src="js/jQuery.js"></script>
    <script src="js/semantic.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>