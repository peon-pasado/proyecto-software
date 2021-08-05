<?php
header("Access-Control-Allow-Origin: *");
require_once 'app_config.php';


$id_course = $_POST["id_course"];

$queryDelete = "DELETE FROM course WHERE id_course='".$id_course."';";
if ($conn->query($queryDelete) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);

?>