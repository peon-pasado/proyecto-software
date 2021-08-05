<?php
header("Access-Control-Allow-Origin: *");
require_once 'app_config.php';

$id_course = $_POST["id_course"];
$name = $_POST["name"];
$description = $_POST["description"];
$credits = $_POST["credits"];
$is_enable = $_POST["is_enable"];



$queryEditCourse= "UPDATE course SET name='".$name."',description='".$description."',credits='".$credits."',is_enable='".$is_enable."' WHERE id_course = '".$id_course."';";

if ($conn->query($queryEditCourse) === TRUE) {
  echo "Course updated successfully";
} else {
  echo "Error updating course: " . $conn->error;
}


mysqli_close($conn);


?>