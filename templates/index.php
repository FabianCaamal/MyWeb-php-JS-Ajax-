<?php

session_start();
// error_reporting(0);

$user = $_SESSION['nombre'];

if($user == null || $user == ''){
    header('Location: http://localhost/web/');
}

$userId = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Plaza Sandy </title>
    <link rel="stylesheet" href="../public/css/modal.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</head>
<body>

<ul class="nav nav-taps">
    <li class="nav-item">
        <a href="#" class="nav-link disabled"><?php echo $_SESSION['nombre'] ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#">Perfil</a>
    </li>
    <li class="nav-item">
        <a id="abrir" class="nav-link" href="#">Carrito( <small id="count">0</small> ) </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="logout.php">Cerrar sesion</a>
    </li>
</ul>
<br><br>

<?php include '../templates/modal.php'; ?>

 <!-- Script de la ventana Modal -->
<script src="../scripts/frontend/modal.js"></script>
<script src="../scripts/frontend/modalController.js"></script>

</body>
</html>