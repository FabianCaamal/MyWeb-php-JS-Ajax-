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
            <h1>Iniciar sesion</h1>

            <form id="form">
                <input type="text" name="email" id="email" placeholder="email" required='true'>
                <input type="password" name="pass" id="pass" placeholder="pass">
                <input type="submit" value="iniciar sesion">
                <br> 
                <span id="msg"></span>
            </form>

            <input type="checkbox" id="ver"> <label for="ver">Mostrar contrasena</label>

            <div class="formFooter">
                <a href="#">Olvidaste tu contrasena?</a>
            </div>
        </div>     
    </div>

<script src="./scripts/frontend/login.js"></script>
</body>
</html>