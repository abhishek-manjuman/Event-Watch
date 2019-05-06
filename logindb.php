<?php
session_start();
include "dbconnection.php";

mysqli_select_db($conn, 'eventwatch');


$email = $_POST['log-email'];
$password = $_POST['log-password'];

echo $email;
echo $password;

$sql_qur = "select * from login where email='$email' && password = '$password' ";

$result = mysqli_query($conn,$sql_qur);

$num = mysqli_num_rows($result);
if($num == 1){

    $_SESSION['email'] = $email;
    header('location:index.php');
}else{
    header('location:login.php');
    echo "Enter email/password worng";
}
?>
