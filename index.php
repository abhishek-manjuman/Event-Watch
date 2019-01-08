
<?php
session_start();
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
    <link rel="stylesheet" href="css/canvas_style.scss">

<!--  Abhishek maurya  -->
    <style>
    canvas{
        
        
          }
    </style>

</head>
<body>

    <div class="ui container fluid">
        <?php
         include "header.php";
        ?>

        
        <div class="ui container fluid">
            <canvas ></canvas>
          <div class="ui container">
            <div class="ui segment pink inverted raised search-panel">
                <div class="ui massive fluid icon input">
                  <select class="ui compact selection dropdown">
                  <option value="all">All</option>
                  <option selected="" value="articles">Articles</option>
                  <option value="products">Products</option>
                </select>
                    <input type="text" id="main-search" placeholder="Search your requirment......." autofocus>
                    <i class="search icon"></i>
                  </div>
                  <!-- <div class="ui divider hidden"></div> -->


                  <div class="ui segment">
                  <div class="quick-link">
                    
                    <a href="" class="quick-links" data-content="Add users to your feed" data-variation="mini inverted">#search</a>
                    <a href="" class="quick-links">#search</a>
                    <a href="" class="quick-links">#search</a>
                    <a href="" class="quick-links">#search</a>
                    <a href="" class="quick-links">#search</a>
                    <a href="" class="quick-links">#search</a>
                    <a href="" class="quick-links">#search</a>
                    <a href="" class="quick-links">#search</a>
                    <a href="" class="quick-links">#search</a>
                    <a href="" class="quick-links">#search</a>
                    <a href="" class="quick-links">#search</a>
                    <a href="" class="quick-links">#search</a>
                    <a href="" class="quick-links">#search</a>
                    <a href="" class="quick-links">#search</a>
                    <a href="" class="quick-links">#search</a>
                  </div>
        </div>
            </div>
          </div>
        </div>
          <div class="ui container fluid product_panel">
            <div class="ui segment basic events-panal">
                <div class="ui cards product-card">
                    <div class="card">
                      <div class="image">
                        <img src="image/event2.jpg">
                      </div>
                      <div class="content">
                        <div class="header">Matt Giampietro</div>
                        <div class="meta">
                          <a>Friends</a>
                        </div>
                        <div class="description">
                          Matthew is an interior designer living in New York.
                        </div>
                      </div>
                      <div class="extra content">
                        <span class="right floated">
                          Joined in 2013
                        </span>
                        <span>
                          <i class="user icon"></i>
                          75 Friends
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <div class="image">
                        <img src="image/event2.jpg">
                      </div>
                      <div class="content">
                        <div class="header">Molly</div>
                        <div class="meta">
                          <span class="date">Coworker</span>
                        </div>
                        <div class="description">
                          Molly is a personal assistant living in Paris.
                        </div>
                      </div>
                      <div class="extra content">
                        <span class="right floated">
                          Joined in 2011
                        </span>
                        <span>
                          <i class="user icon"></i>
                          35 Friends
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <div class="image">
                        <img src="image/event2.jpg">
                      </div>
                      <div class="content">
                        <div class="header">Elyse</div>
                        <div class="meta">
                          <a>Coworker</a>
                        </div>
                        <div class="description">
                          Elyse is a copywriter working in New York.
                        </div>
                      </div>
                      <div class="extra content">
                        <span class="right floated">
                          Joined in 2014
                        </span>
                        <span>
                          <i class="user icon"></i>
                          151 Friends
                        </span>
                      </div>
                    </div>
                      <div class="card">
                        <div class="image">
                        <img src="image/event2.jpg">
                        </div>
                        <div class="content">
                          <div class="header">Matt Giampietro</div>
                          <div class="meta">
                            <a>Friends</a>
                          </div>
                          <div class="description">
                            Matthew is an interior designer living in New York.
                          </div>
                        </div>
                        <div class="extra content">
                          <span class="right floated">
                            Joined in 2013
                          </span>
                          <span>
                            <i class="user icon"></i>
                            75 Friends
                          </span>
                        </div>
                      </div>
                      <div class="card">
                        <div class="image">
                        <img src="image/event2.jpg">
                        </div>
                        <div class="content">
                          <div class="header">Molly</div>
                          <div class="meta">
                            <span class="date">Coworker</span>
                          </div>
                          <div class="description">
                            Molly is a personal assistant living in Paris.
                          </div>
                        </div>
                        <div class="extra content">
                          <span class="right floated">
                            Joined in 2011
                          </span>
                          <span>
                            <i class="user icon"></i>
                            35 Friends
                          </span>
                        </div>
                      </div>
                      <div class="card">
                        <div class="image">
                        <img src="image/event2.jpg">
                        </div>
                        <div class="content">
                          <div class="header">Elyse</div>
                          <div class="meta">
                            <a>Coworker</a>
                          </div>
                          <div class="description">
                            Elyse is a copywriter working in New York.
                          </div>
                        </div>
                        <div class="extra content">
                          <span class="right floated">
                            Joined in 2014
                          </span>
                          <span>
                            <i class="user icon"></i>
                            151 Friends
                          </span>
                        </div>
                      </div>
                        <div class="card">
                          <div class="image">
                        <img src="image/event2.jpg">">
                          </div>
                          <div class="content">
                            <div class="header">Matt Giampietro</div>
                            <div class="meta">
                              <a>Friends</a>
                            </div>
                            <div class="description">
                              Matthew is an interior designer living in New York.
                            </div>
                          </div>
                          <div class="extra content">
                            <span class="right floated">
                              Joined in 2013
                            </span>
                            <span>
                              <i class="user icon"></i>
                              75 Friends
                            </span>
                          </div>
                        </div>
                        <div class="card">
                          <div class="image">
                        <img src="image/event2.jpg">
                          </div>
                          <div class="content">
                            <div class="header">Molly</div>
                            <div class="meta">
                              <span class="date">Coworker</span>
                            </div>
                            <div class="description">
                              Molly is a personal assistant living in Paris.
                            </div>
                          </div>
                          <div class="extra content">
                            <span class="right floated">
                              Joined in 2011
                            </span>
                            <span>
                              <i class="user icon"></i>
                              35 Friends
                            </span>
                          </div>
                        </div>
                        <div class="card">
                          <div class="image">
                        <img src="image/event2.jpg">
                          </div>
                          <div class="content">
                            <div class="header">Elyse</div>
                            <div class="meta">
                              <a>Coworker</a>
                            </div>
                            <div class="description">
                              Elyse is a copywriter working in New York.
                            </div>
                          </div>
                          <div class="extra content">
                            <span class="right floated">
                              Joined in 2014
                            </span>
                            <span>
                              <i class="user icon"></i>
                              151 Friends
                            </span>
                          </div>
                        </div>
                          <div class="card">
                            <div class="image">
                        <img src="image/event2.jpg">">
                            </div>
                            <div class="content">
                              <div class="header">Matt Giampietro</div>
                              <div class="meta">
                                <a>Friends</a>
                              </div>
                              <div class="description">
                                Matthew is an interior designer living in New York.
                              </div>
                            </div>
                            <div class="extra content">
                              <span class="right floated">
                                Joined in 2013
                              </span>
                              <span>
                                <i class="user icon"></i>
                                75 Friends
                              </span>
                            </div>
                          </div>
                          <div class="card">
                            <div class="image">
                        <img src="image/event2.jpg">
                            </div>
                            <div class="content">
                              <div class="header">Molly</div>
                              <div class="meta">
                                <span class="date">Coworker</span>
                              </div>
                              <div class="description">
                                Molly is a personal assistant living in Paris.
                              </div>
                            </div>
                            <div class="extra content">
                              <span class="right floated">
                                Joined in 2011
                              </span>
                              <span>
                                <i class="user icon"></i>
                                35 Friends
                              </span>
                            </div>
                          </div>
                          <div class="card">
                            <div class="image">
                        <img src="image/event2.jpg">
                            </div>
                            <div class="content">
                              <div class="header">Elyse</div>
                              <div class="meta">
                                <a>Coworker</a>
                              </div>
                              <div class="description">
                                Elyse is a copywriter working in New York.
                              </div>
                            </div>
                            <div class="extra content">
                              <span class="right floated">
                                Joined in 2014
                              </span>
                              <span>
                                <i class="user icon"></i>
                                151 Friends
                              </span>
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
    <script src="js/canvas_main2.js"></script>
</body>
</html>
