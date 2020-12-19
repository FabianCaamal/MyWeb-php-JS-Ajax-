<?php
include_once('conexion.php');

$email = $_POST['email'];
$pass = md5($_POST['pass']);

$sql = $conexion->query("SELECT id, nombre, email FROM users WHERE email = '$email' && password = '$pass'");

if($sql->num_rows > 0){
    $userData = $sql->fetch_assoc();
    $json = $userData;

    session_start();

    $_SESSION['id'] = $json['id'];
    $_SESSION['nombre'] = $json['nombre'];
    $_SESSION['email'] = $json['email'];
}

mysqli_close($conexion);
echo json_encode($json);

?>