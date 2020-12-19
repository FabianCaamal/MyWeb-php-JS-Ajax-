<?php

include 'conexion.php';

$user = $_POST['email'];
// $user = 'fabian@gmail.co';

$sql = $conexion->query("SELECT * FROM users WHERE email = '$user'");

if($sql->num_rows > 0){
    $json = [ "status" => "rejected" ];
    echo json_encode($json);
}else{
    $json = ["status" => "accepted"];
    echo json_encode($json);
}

?>