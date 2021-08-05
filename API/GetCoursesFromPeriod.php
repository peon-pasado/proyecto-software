<?php
header("Access-Control-Allow-Origin: *");
require_once 'app_config.php';

$id_period = $_POST["id_period"];

$queryCourses = "SELECT*FROM course WHERE id_period_fk ='".$id_period."';";
$resultCourses = mysqli_query($conn, $queryCourses);
if ($resultCourses->num_rows > 0)
{
    $json = array();
    while($row = $resultCourses->fetch_assoc())
    {
        $json[] = $row;
    }
    echo json_encode($json);
}
else
{
    echo 'empty';
}



mysqli_close($conn);


?>