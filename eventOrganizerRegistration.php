<?php

session_start();
include "dbconnection.php";
if(isset($_SESSION['email'])){
    header('location:newEvent.php');
}elseif(!isset($_SESSION['email'])){

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>

  </body>
</html>
