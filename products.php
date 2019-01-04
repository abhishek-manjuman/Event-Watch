<?php
session_start();
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

      <div class="ui segment center aligned secondary">
          <h1 class="ui header ">
              <div class="content">Product Page</div>
          </h1>

          <div class="ui center aligned warning message segment">
              <p><i class="warning icon"></i>Sorry for your inconivient, Currently no products are avilebal we will come soon.</p>
              <a class="ui button orange" href="index.php">Thank You</a>
          </div>

          
      </div>
    </div>

    <!-- ======================  JS Files ===================== -->
    <script src="js/jQuery.js"></script>
    <script src="js/semantic.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>