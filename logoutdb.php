<?php
session_start();
session_destroy();
header('location:index.php');

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$validURL = str_replace("&","&amp;",$url);

echo $validURL;
?>