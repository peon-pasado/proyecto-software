<?php
header("Access-Control-Allow-Origin: *");
require_once 'app_config.php';

$id_period = $_POST["id_period"];
$name = $_POST["name"];
$credits = $_POST["credits"];
$date_init = $_POST["date_init"];
$date_finish = $_POST["date_finish"];



$queryEditPeriod= "UPDATE period SET name='".$name."',credits='".$credits."',date_init='".$date_init."',date_finish='".$date_finish."' WHERE id_period = '".$id_period."';";

if ($conn->query($queryEditPeriod) === TRUE) {
  echo "Period updated successfully";
} else {
  echo "Error updating period: " . $conn->error;
}


mysqli_close($conn);


?>