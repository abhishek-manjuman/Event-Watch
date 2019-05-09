<?php
//session_start();
include "dbconnection.php";

mysqli_select_db($conn, 'eventwatch');

$email = $_POST['college-email'];
$phnumber = $_POST['college-phnumber'];
$name = $_POST['college-name'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$pin = $_POST['college-pin-number'];
$address = $_POST['college-address'];
$tearms = $_POST['college-tearms'];
$college_detail = htmlspecialchars($_POST['details']);

$image_name = $_FILES['college-pic']['name'];
$image_tmp_name = $_FILES['college-pic']['tmp_name'];
$image_type = $_FILES['college-pic']['type'];

$details = trim($college_detail);

$image_dir = 'image/'.$name.'/';

if(!is_dir($image_dir)){
    mkdir($image_dir,0777, true);
}
$dir=$image_dir.$image_name;
move_uploaded_file($image_tmp_name,$dir);
//echo $image_dir;
//print_r($image);

if(empty($tearms)){
    $tearm = 0;
}else{
    $tearm = 1;
}

$status = 'true';
//Generate unique id x1=2,x2=2,x3=2,x4=4

$a= substr($name,0,2);
$x1= strtoupper($a);
$x2= date('m');
$x3= date('y');

$sql_qr = 'select count(*) as numberofrows from college';

$result = mysqli_query($conn,$sql_qr);
$value = mysqli_fetch_assoc($result);
$rows = $value['numberofrows'];
echo $rows;
$x4 = str_pad($rows+1, 4, 0, STR_PAD_LEFT);

$collegeid = $x1.$x2.$x3.$x4;
echo $collegeid;

 // $sql_qr1 = "insert into college (collegeid, college-name, country, state, city, pin-code, address, image, about-college, college-email,
 //  college-contact, tearms, status)
 //            values('$collegeid', '$name','$country','$state','$city','$pin','$address','$dir','$details','$email','$phnumber','$tearm','$status')";
$sql_qr1 =  "INSERT INTO `college`(`collegeid`, `college-name`, `country`, `state`, `city`, `pin-code`, `address`, `image`, `about-college`,`college-email`, `college-contact`, `tearms`, `status`) VALUES ('$collegeid', '$name','$country','$state','$city','$pin','$address','$dir','$details','$email','$phnumber','$tearm','$status')";

$data = mysqli_query($conn, $sql_qr1);

if($data){
    header('location:addCollege.php?data_inserted=success');
}else{
    header('location:addCollege.php?data_failed=failed');
}
?>
