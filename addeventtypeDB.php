<?php

include "dbconnection.php";

mysqli_select_db($conn, 'eventwatch');

$type_name = $_POST['type-name'];
// $event_organizer = $_POST['event-organizer'];
$type_detail = $_POST['type-detail'];
$event_mode = $_POST['event-mode'];

$a= substr($type_name,0,2);
$x1= strtoupper($a);
$x2= date('m');
$x3= date('y');

$sql_qr = "select count(eventtypeid) as numberofrows from event-type";

$result = mysqli_query($conn,$sql_qr);
$value = mysqli_fetch_assoc($result);
$rows = $value['numberofrows'];
echo $rows;


echo "result - ".$rows;

$x4 = str_pad($rows+1, 4, 0, STR_PAD_LEFT);

$typeid = $x1.$x2.$x3.$x4;

$sql_qr1 = "INSERT INTO `event-type`(`eventtypeid`, `type-name`, `type-detail`, `mode`) VALUES ('$typeid', '$type_name', '$type_detail', '$event_mode')";

$data = mysqli_query($conn, $sql_qr1);
if ($data) {
  header('location:addeventtype.php?data_inserted=success');
} else {
    header('location:addeventtype.php?data_failed=failed');
}


 ?>
