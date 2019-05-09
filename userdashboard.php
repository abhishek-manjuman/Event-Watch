
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
    <title>Event Watch</title>
    <!-- =======================  CSS Files ==================== -->
    <link rel="stylesheet" href="css/semantic.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/uaser_dashboard.css">

</head>
<body>

    <div class="ui container fluid">
        <?php
         include "header.php";
        ?>
    </div>
    <div class="ui container fluid">
        <div class="ui container">
            <div class="ui grid user-dashboard">
                <div class="twelve wide column">
                        <div class="ui segments">

                                <div class="ui segment">
                                  <div class="ui grid">
                                      <div class="six wide column">
                                          <div class="ui center aligned segment stacked user-dashboard-pic-detail">
                                                <img class="ui centered circular image" src="image/user_image.png"
                                                style="background-color:white;height:250px;width:250px;">
                                          </div>
                                      </div>
                                      <div class="ten wide column">
                                          <div class="ui center aligned segment stacked user-dashboard-pic-detail">
                                              <div class="ui segment basic">
                                                <div class="ui segment basic very">
                                                  <h1 class="ui header">
                                                      <div class="content">
                                                          Priyanka Rawal
                                                          <div class="sub header">
                                                            <span style="font-family:fantasy;">
                                                              <strong>
                                                                "I am a software devaloper."
                                                              </strong>
                                                            </span>
                                                          </div>
                                                      </div>
                                                    </h1>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                            <div class="ui">
                                    <div class="ui secondary orange tabular pointing menu" style="background-color:#f3f4f5;">
                                            <a class="active  item" data-tab="activity">Activity</a>
                                            <a class="item" data-tab="gallery">Gallery</a>
                                            <a class="item" data-tab="about">About</a>
                                            <a class="item" data-tab="reviews">Reviews</a>
                                            <div class="right menu">
                                                <a class="ui item">
                                                    <i class="heart icon circular current-user-profile_favourite_icon" data-content="Add in Favourite list" data-variation="mini inverted" ></i>
                                                </a>
                                                <a class="ui white item">
                                                        <i class="share alternate icon circular current-user-profile_share_icon" data-variation="mini" title="share"></i>
                                                        <div class="ui current-user-profile_share custom popup transition hidden">
                                                            <i class="twitter inverted  teal circular icon"></i>
                                                            <div class="ui divider"></div>
                                                            <i class="facebook inverted  blue circular icon"></i>

                                                            <div class="ui divider"></div>
                                                            <i class="tumblr inverted  circular icon"></i>
                                                          </div>
                                                </a>
                                                <a  class="ui item" href="setting.php">
                                                    <i class="cog icon circular current-user-profile_settings_icon" data-content="Settings" data-variation="mini inverted"></i>
                                                </a>
                                            </div>
                                            </div>
                                </div>
                        </div>
                        <div class="ui bottom tab active segments" data-tab="activity" >
                                <div class="ui segment secondary ">
                                        <h2 class="ui header">
                                            <div class="content">Activity</div>
                                        </h2>
                                    </div>
                                    <div class="ui segment"></div>
                        </div>
                        <div class="ui bottom tab segments" data-tab="about">
                            <div class="ui segment  clearing secondary ">
                                <h6 class="ui right floated header about-edit" >
                                    <i class="icon edit" data-content="Edit your details" data-variation="mini inverted"></i>
                                </h6>
                                <h2 class="ui left floated header">
                                    <div class="content">
                                        About
                                    </div>
                                </h2>
                            </div>
                            <div class="ui segment about-detail-show">
                                <h3 class="ui justified header">
                                    <div class="content">
                                        Introduction
                                        <div class="sub header">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti voluptatum nemo porro incidunt excepturi suscipit quasi beatae laboriosam assumenda voluptas, quod itaque rerum dolore animi maxime perferendis ea in saepe.
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, maxime quas dolor omnis unde nobis est. Ex nostrum officiis dicta. Voluptatem dolore facere accusantium laudantium asperiores minima quod fuga similique.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam tempora cumque repudiandae repellat, rem laudantium expedita voluptatum. Dolor, illo molestiae pariatur facere facilis, optio velit ea doloremque dignissimos fugit quis.
                                        </div>
                                    </div>
                                </h3>
                                <div class="ui divider"></div>
                                <h3 class="ui justified header">
                                    <div class="content">
                                        Basic Informetion
                                        <div class="sub header">
                                            <table class="ui very basic striped  celled table">
                                                <thead>
                                                  <tr><th>Employee</th>
                                                  <th>Correct Guesses</th>
                                                </tr></thead>
                                                <tbody>
                                                  <tr>
                                                    <td>
                                                      <h4 class="ui image header">
                                                        <img src="/images/avatar2/small/lena.png" class="ui mini rounded image">
                                                        <div class="content">
                                                          Lena
                                                          <div class="sub header">Human Resources
                                                        </div>
                                                      </div>
                                                    </h4></td>
                                                    <td>
                                                      22
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                      <h4 class="ui image header">
                                                        <img src="/images/avatar2/small/matthew.png" class="ui mini rounded image">
                                                        <div class="content">
                                                          Matthew
                                                          <div class="sub header">Fabric Design
                                                        </div>
                                                      </div>
                                                    </h4></td>
                                                    <td>
                                                      15
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                      <h4 class="ui image header">
                                                        <img src="/images/avatar2/small/lindsay.png" class="ui mini rounded image">
                                                        <div class="content">
                                                          Lindsay
                                                          <div class="sub header">Entertainment
                                                        </div>
                                                      </div>
                                                    </h4></td>
                                                    <td>
                                                      12
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                      <h4 class="ui image header">
                                                        <img src="/images/avatar2/small/mark.png" class="ui mini rounded image">
                                                        <div class="content">
                                                          Mark
                                                          <div class="sub header">Executive
                                                        </div>
                                                      </div>
                                                    </h4></td>
                                                    <td>
                                                      11
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                        </div>
                                    </div>
                                </h3>

                            </div>
                            <div class="ui segment about-edit-detail">
                                <h2 class="ui header">
                                    <div class="content">Edit page</div>
                                </h2>
                            </div>
                        </div>
                        <div class="ui bottom tab segments" data-tab="gallery">
                            <div class="ui segment secondary ">
                                <h2 class="ui header">
                                    <div class="content">Gallery</div>
                                </h2>
                            </div>
                            <div class="ui segment">
                            </div>
                        </div>
                        <div class="ui bottom tab segment" data-tab="reviews">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto voluptatem facere et dolorum eveniet voluptas odio magni aut debitis! Rerum aspernatur iste in impedit modi quisquam debitis facilis maiores?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto voluptatem facere et dolorum eveniet voluptas odio magni aut debitis! Rerum aspernatur iste in impedit modi quisquam debitis facilis maiores?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto voluptatem facere et dolorum eveniet voluptas odio magni aut debitis! Rerum aspernatur iste in impedit modi quisquam debitis facilis maiores?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto voluptatem facere et dolorum eveniet voluptas odio magni aut debitis! Rerum aspernatur iste in impedit modi quisquam debitis facilis maiores?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto voluptatem facere et dolorum eveniet voluptas odio magni aut debitis! Rerum aspernatur iste in impedit modi quisquam debitis facilis maiores?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto voluptatem facere et dolorum eveniet voluptas odio magni aut debitis! Rerum aspernatur iste in impedit modi quisquam debitis facilis maiores?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto voluptatem facere et dolorum eveniet voluptas odio magni aut debitis! Rerum aspernatur iste in impedit modi quisquam debitis facilis maiores?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto voluptatem facere et dolorum eveniet voluptas odio magni aut debitis! Rerum aspernatur iste in impedit modi quisquam debitis facilis maiores?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto voluptatem facere et dolorum eveniet voluptas odio magni aut debitis! Rerum aspernatur iste in impedit modi quisquam debitis facilis maiores?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae architecto voluptatem facere et dolorum eveniet voluptas odio magni aut debitis! Rerum aspernatur iste in impedit modi quisquam debitis facilis maiores?</p>
                        </div>
                        <div class="ui bottom tab segment" data-tab="setting">

                                <h1>Abhishek maurya</h1>
                                <h1>Abhishek maurya</h1>
                                <h1>Abhishek maurya</h1>

                        </div>
                </div>
                <div class="four wide column">
                    <div class="ui segment"></div>
                    <div class="ui segment"></div>
                    <div class="ui segment"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- ======================  JS Files ===================== -->
    <script src="js/jQuery.js"></script>
    <script src="js/semantic.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/user_dashboard.js"></script>
</body>
</html>
