<?php
header("Access-Control-Allow-Origin: *");
require_once 'app_config.php';

$id_student = $_POST["id_student"];
$name = $_POST["name"];
$credits = $_POST["credits"];
$date_init = $_POST["date_init"];
$date_finish = $_POST["date_finish"];

$queryCreatePeriod = "INSERT INTO period(id_student_fk,name,credits,date_init,date_finish) VALUES('".$id_student."','".$name."','".$credits."','".$date_init."','".$date_finish."')";

if($conn->query($queryCreatePeriod)==true){
    $id_period = $conn->insert_id;
    
    $queryPeriod = "SELECT*FROM period WHERE id_period ='".$id_period."';";
    $resultPeriod = mysqli_query($conn, $queryPeriod);
    $row = $resultPeriod->fetch_assoc();
    echo json_encode($row);
    
}
else{
    echo "Error: ".$queryCreatePeriod."<br>".$con->error;
}    

mysqli_close($conn);


?>