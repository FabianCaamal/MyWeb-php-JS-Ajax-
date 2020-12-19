<?php
include('conexion.php');

$sql = $conexion->query("SELECT * FROM productos");

while($row = mysqli_fetch_array($sql)){
    $json[] = $row;
}

echo json_encode($json);

?>