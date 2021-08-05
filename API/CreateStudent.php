<?php
header("Access-Control-Allow-Origin: *");
require_once 'app_config.php';

$reg_email = $_POST["reg_email"];
$reg_password = $_POST["reg_password"];
$reg_name = $_POST["reg_name"];
$reg_lastname = $_POST["reg_lastname"];



$queryCheckEmail = "SELECT email FROM student WHERE email ='".$reg_email."';";
$resultCheckEmail = mysqli_query($conn, $queryCheckEmail);

if($resultCheckEmail->num_rows>0){
    echo"this email is in use";
}

else{
    //echo "Creating user";
    $queryCreateUser = "INSERT INTO student(email,password,name,lastname) VALUES('".$reg_email."','".$reg_password."','".$reg_name."','".$reg_lastname."')";
    if($conn->query($queryCreateUser)==true){
                //echo $conn->insert_id;
        echo "sucess";
    }
    else{
        echo "Error: ".$queryCreateUser."<br>".$con->error;
    }
    
}

mysqli_close($conn);


?>