<?php
include "dbconnection.php";

$val1 = $_POST['datapost1'];
echo $val1;
$sql_qr = "select * from login where email='$val1'";
$res = mysqli_query($conn, $sql_qr);

$num = mysqli_num_rows($res);
if($num >= 1){
 echo 'This email is already registered!';
}
?>