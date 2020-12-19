<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="./bootstrap/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/login.css">
    <title>MyApp</title>
</head>
<body>
    
    <div class="card">
        <div class="formContent">
            <h2 class="active"> Sign up </h2>
            <a href="./" class="underlineHover">Ya tengo cuenta</a>

            <form id="form">
                <input type="text" name="username" id="username" placeholder="Nombre de usuario" required='true'>
                <input type="text" name="email" id="email" placeholder="Email" required='true'>
                <input type="password" name="pass" id="pass" placeholder="Contraseña" required='true'>
                <input type="password" name="confipass" id="confipass" placeholder="Confirmar contraseña" required='true'>
                <input type="submit" value="Registrarse">
                <br> 
                <span id="msg"></span>
            </form>

            <input type="checkbox" id="ver"> <label for="ver">Mostrar contrasena</label>

            <div class="formFooter">
                <a>Created by FabianCaamal &copy; </a>
            </div>
        </div>     
    </div>

<script src="./scripts/frontend/singup.js"></script>
</body>
</html>