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

</head>
<body>
    
    <div class="ui container fluid">
        <?php
         include "header.php";
        ?>
    </div>
    
    <div class="ui container fluid">
        
        <div class="ui container">
        <img class="ui fluid image" src="image/about-us.jpg">
        <div class="ui tall orange stacked segment">
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

                <div class="ui grid">

                        <div class="eight wide column">
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        </div>
                        <div class="eight wide column">
                            <div class="ui segment black center aligned">
                                <i class="circular massive eye orange icon"></i>
                            </div>
                        </div>
                </div>
                <div class="ui grid">

                    <div class="eight wide column">
                        <div class="ui segment black center aligned">
                            <i class="circular massive eye orange icon"></i>
                        </div>
                    </div>    
                    <div class="eight wide column">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
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