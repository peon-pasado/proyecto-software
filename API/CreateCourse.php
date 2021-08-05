<?php
header("Access-Control-Allow-Origin: *");
require_once 'app_config.php';

$id_period_fk = $_POST["id_period_fk"];
$name = $_POST["name"];
$description = $_POST["description"];
$credits = $_POST["credits"];
$is_enable = $_POST["is_enable"];


$day_of_week = $_POST["day_of_week"];
$hour = $_POST["hour"];

$queryCreateCourse = "INSERT INTO course(id_period_fk,name,description,credits,is_enable) VALUES('".$id_period_fk."','".$name."','".$description."','".$credits."','".$is_enable."')";

if($conn->query($queryCreateCourse)==true){
    $id_course_fk= $conn->insert_id;
    
    $queryCourse = "SELECT*FROM course WHERE id_course ='".$id_course_fk."';";
    $resultCourse = mysqli_query($conn, $queryCourse);
    $row = $resultCourse->fetch_assoc();
    echo json_encode($row);
    
    
    
}
else{
    echo "Error: ".$queryCreatePeriod."<br>".$con->error;
}    

mysqli_close($conn);


?>