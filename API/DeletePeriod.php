<?php
header("Access-Control-Allow-Origin: *");
require_once 'app_config.php';


$id_period = $_POST["id_period"];

$queryDelete = "DELETE FROM period WHERE id_period='".$id_period."';";
if ($conn->query($queryDelete) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);

?>