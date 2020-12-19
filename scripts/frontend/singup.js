let username = document.getElementById('username');
let email = document.getElementById('email');
let pass = document.getElementById('pass');
let confipass = document.getElementById('confipass');
let regis = document.getElementById('form')
let check = document.getElementById('ver');
let msg = document.getElementById('msg');

regis.addEventListener('submit', function(e){
    e.preventDefault() 

    $.ajax({
        method: 'POST',
        url: 'http://localhost/web/scripts/backend/validarUsuario.php',
        dataType: 'json',
        data: { email: email.value},
        success: function(res){
            if(res.status == 'accepted'){
                if(pass.value === confipass.value){
                    registrarUsuario(username.value, email.value, pass.value);
                    username.value = '';
                    email.value = '';
                    pass.value = '';
                    confipass.value = '';
                } else{
                    mensaje('red', 'Confirmación de contraseña incorrecta')
                }
            } else{
                mensaje('red', 'El correo ya ha sido registrado')
            }
        }
    });
});

function registrarUsuario(_user, _mail, _pass){
    mensaje('blue', 'Gracias por registrarse con nosotros :) ya puedes ir en el login a iniciar sesion');
    $.ajax({
        method: 'POST',
        url: 'http://localhost/web/scripts/backend/registrarUsuario.php',
        dataType: 'json',
        data: { username: _user, mail: _mail, pass: _pass },
        success: function(res){
            console.log(res.status);
        }
    });
}

function mensaje(color, men){
    msg.style.color = color
    msg.innerHTML = men
}

check.addEventListener('change', function(){
    if(this.checked){
        pass.type = 'text';
    } else {
        pass.type = 'password';
    }
});

