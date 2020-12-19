<?php 
include 'conexion.php';

$username = $_POST['username'];
$email = $_POST['mail'];
$pass = $_POST['pass'];

if($username && $email && $pass){
    $sql = $conexion->query("insert into users(nombre, email, password) values('$username','$email', md5('$pass'))");

    $json = ["status" => "success"];

} else{
    $json = ["status" => "failed"];
}

echo json_encode($json);

?>