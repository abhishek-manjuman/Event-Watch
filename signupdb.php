<?php
session_start();
include "dbconnection.php";

mysqli_select_db($conn, 'eventwatch');

$email = $_POST['signup-email'];
$phnumber = $_POST['signup-phnumber'];
$password = $_POST['signup-password'];
// $enrolment = $_POST['signup-enrolment-no'];
$tearms = $_POST['signup-tearms'];

if(empty($tearms)){
    $tearm = 0;
}else{
    $tearm = 1;
}

$sql_qur = "select * from login where email='$email' OR phnumber = '$phnumber'";

$result = mysqli_query($conn,$sql_qur);

$num = mysqli_num_rows($result);
$already_exist="true";
if($num == 1){
    header('location:signup.php?already_exist=already_exist');
}else{
    $usertype = "user";
    $status = "true";
    $sql_qur1 = "insert into registration (email,phnumber,tearm_condetion) values('$email','$phnumber','$tearm')";
    $sql_qur2 = "insert into login (email, password, usertype, status, phnumber) values('$email','$password','$usertype','$status','$phnumber')";

    mysqli_query($conn, $sql_qur1);
    mysqli_query($conn, $sql_qur2);

    header('location:login.php?t1=abhishek');

}
?>
