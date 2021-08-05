<?php

$servername= "192.185.4.57";
$username= "dazard_bashca";
$password ="123456";
$dbname = "dazard_smart_class_schedule";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if($conn->connect_error){
    die("Connection failed: " . mysqli_connect_error());
}

?>