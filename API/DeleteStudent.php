<?php
header("Access-Control-Allow-Origin: *");
require_once 'app_config.php';


$id_student = $_POST["id_student"];

$queryDelete = "DELETE FROM student WHERE id_student='".$id_student."';";
if ($conn->query($queryDelete) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);


?>