<?php
header("Access-Control-Allow-Origin: *");
require_once 'app_config.php';

$id_student = $_POST["id_student"];

$queryPeriods = "SELECT*FROM period WHERE id_student_fk ='".$id_student."';";
$resultPeriods = mysqli_query($conn, $queryPeriods);
if ($resultPeriods->num_rows > 0)
{
    $json = array();
    while($row = $resultPeriods->fetch_assoc())
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