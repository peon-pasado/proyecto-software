<?php
header("Access-Control-Allow-Origin: *");
require_once 'app_config.php';


$login_email = $_POST["login_email"];
$login_password = $_POST["login_password"];

$queryAuth = "SELECT id_student,email,password,name,lastname FROM student WHERE email = '".$login_email."';";
$resultAuth = mysqli_query($conn, $queryAuth);

$json=array();
if ($resultAuth->num_rows>0) {
    
    while($row = $resultAuth->fetch_assoc()) {

    if($row['password']==$login_password){
        unset($row['password']);
        $json[]=$row;
        echo json_encode($json);
    }
    else{
        echo "Password incorrect";
    }

  }

} else {
  echo "\nThis email is not register";
}

mysqli_close($conn);


?>