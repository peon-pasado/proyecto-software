<?php
header("Access-Control-Allow-Origin: *");
require_once 'app_config.php';

$id_student = $_POST["id_student"];
$edit_email = $_POST["edit_email"];
$edit_password = $_POST["edit_password"];
$edit_name = $_POST["edit_name"];
$edit_lastname = $_POST["edit_lastname"];



$queryEditStudent= "UPDATE student SET email='".$edit_email."',password='".$edit_password."',name='".$edit_name."',lastname='".$edit_lastname."' WHERE id_student = '".$id_student."';";

if ($conn->query($queryEditStudent) === TRUE) {
  echo "Student updated successfully";
} else {
  echo "Error updating student: " . $conn->error;
}


mysqli_close($conn);


?>