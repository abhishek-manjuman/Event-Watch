<?php
include "dbconnection.php";

mysqli_select_db($conn, 'eventwatch');

$event_name = $_POST['event-name'];
// $event_organizer = $_POST['event-organizer'];
$event_type = $_POST['event-type'];
$event_visibility = $_POST['event-visibility'];
$event_start = $_POST['event-start'];
$event_end = $_POST['event-end'];
$event_start_time = $_POST['event-start-time'];
$event_end_time = $_POST['event-end-time'];
// $event_repit = $_POST['event-repit'];
$phnumber = $_POST['phnumber'];
$country = $_POST['event-country'];
$state = $_POST['event-state'];
$city = $_POST['event-city'];
$pin = $_POST['pin-number'];
$event_venue = $_POST['event-venue'];
$event_charge = $_POST['event-charge'];
$total_seats = $_POST['total-seats'];
// $tearms = $_POST['tearm'];
$event_detail = trim(htmlspecialchars($_POST['event-detail']));
// $event_pic = $_POST['event-pic'];

// print_r($_FILES["banner"]);
$pic_name = $_FILES["banner"]["name"];
$pic_temp_name = $_FILES["banner"]["tmp_name"];

$image_dir = 'image/events/'.$event_name.'/';

if(!is_dir($image_dir)){
    mkdir($image_dir,0777, true);
}
$dir=$image_dir.$pic_name;
move_uploaded_file($pic_temp_name,$dir);
//echo $image_dir;
//print_r($image);

if(empty($tearms)){
    $tearm = 0;
}else{
    $tearm = 1;
}

$status = 'true';
//Generate unique id x1=2,x2=2,x3=2,x4=4

$a= substr($event_name,0,2);
$x1= strtoupper($a);
$x2= date('m');
$x3= date('y');

$sql_qr = 'select * from events';

$getData = mysqli_query ($conn, $sql_qr);
$getNumberOfRowws = mysqli_num_rows($getData);

$x4 = str_pad($getNumberOfRowws, 4, 0, STR_PAD_LEFT);

$eventid = $x1.$x2.$x3.$x4;

$sql_qr1= "INSERT INTO events(`event-id`, `event-name`, `event-type`, `start-date`, `end-date`, `start-time`, `end-time`, `country`, `state`, `city`, `pin-code`, `venue`, `participation-fee`, `total-seats`,`event-detail`, `image`,`status`)
          VALUES ('$eventid','$event_name','$event_type','$event_start','$event_end','$event_start_time','$event_end_time','$country','$state','$city','$pin','$event_venue','$event_charge','$total_seats','$event_detail','$dir','$status')";



$data = mysqli_query($conn, $sql_qr1);

if($data){
  header("location:newEvent.php?success=success");
}else{
    header("location:newEvent.php?failed=failed");
    //echo $data;
}

mysqli_close($conn);

 ?>
