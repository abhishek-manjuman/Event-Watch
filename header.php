<?php
if(isset($_SESSION['email'])){
$current_user = $_SESSION['email'];
}
?>

<div class="ui small menu inverted pink">
            
            <a class="active item home" href="index.php">
                <i class="circular black eye icon"></i>
              Event
              <br>
              Watch
            </a>
            <a href="events.php" class="item">Event's</a>
            <a href="products.php" class="item">Product</a>
            <a href="services.php" class="item">Service</a>
            <a href="aboutus.php" class="item">About Us</a>
            <!-- <a href="" class="item"> Contact Us</a> -->
            <div class="right menu city-menu">
              <div class="item city-item">
                <div class="ui search selection dropdown city-item" data-content="Select your current city" data-variation="mini inverted">
                  <input name="city" type="hidden">
                  <i class="dropdown icon"></i>
                  <div class="default text">Select City</div>
                <div class="menu">
                  <a class="item active">Noida</a>
                  <a class="item">Greater Noida</a>
                  <a class="item">Delhi</a>
                </div>
                </div>
              </div>
              <div class="item">
                  <a class="ui inverted button" href="newEvent.php">Service Provider</a>
              </div>
              
                <?php
                if(empty($current_user)){
                ?>
                <div class="item">
                  <a class="ui primary button" href="signup.php">Sign Up</a>
                </div>
                <div class="item">
                  <a class="ui secondary button" href="login.php">Login</a>
                </div>
                  <?php
                   }else{
                  ?>
                  <div class="item">
                    <img class="ui avatar image current-user-profile"  src="image/user_image.png">

                    <div class="ui custom popup top left transition hidden">
                    
                            <img class="ui small centered circular image"  src="image/user_image.png" style="background-color:white;height:100px;width:100px;">
                            <div class="ui center grey aligned header" style="margin:calc(1rem - .14285714em) 0 1rem;">
                            Hello User!
                            </div> 
                            <div class="ui vertical menu">
                              <div class="item">
                                <div class="menu">
                                  <a class="item" href="userdashboard.php">
                                <i class="user orange icon"></i>
                                Profile  </a>
                                <div class="ui divider"></div>
                                  <a class="item">Consumer</a>
                                  <div class="ui divider"></div>
                                  <a class="item">Rails</a>
                                  <div class="ui divider"></div>
                                  <a class="item">Python</a>
                                  <a class="item">Dedicated</a>
                                  <a class="item">E-mail Support</a>
                                  <a class="item">FAQs</a>
                                </div>
                              </div>
                            </div>
                            <div class="ui divider"></div>
                            <a class="ui inverted fluid orange button" href="logoutdb.php">LOGOUT</a>
                    </div>
                <?php
                 }
                ?>  
              </div>
            </div>
            </div>

            