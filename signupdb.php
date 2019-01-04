<?php
session_start();
include "dbconnection.php";

mysqli_select_db($conn, 'eventwatch');

$email = $_POST['signup-email'];
$phnumber = $_POST['signup-phnumber'];
$password = $_POST['signup-password'];

$sql_qur = "select * from registration where email='$email' && phnumber = '$phnumber'  ";

$result = mysqli_query($conn,$sql_qur);

$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION['email'] = $email;
    header('location:index.php');
}else{

    $usertype = "user";
    $status = "true";
    $sql_qur1 = "insert into registration (email,phnumber) values('$email','$phnumber')";
    $sql_qur2 = "insert into login values('$email','$phnumber','$usertype','$status')";

    mysqli_query($conn, $sql_qur1);
    mysqli_query($conn, $sql_qur2);

    header('location:login.php');

}


?>