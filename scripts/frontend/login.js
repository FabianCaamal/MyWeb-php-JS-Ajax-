var form = document.getElementById('form');
var email = document.getElementById('email');
var pass = document.getElementById('pass');
var msg = document.getElementById('msg');
var check = document.getElementById('ver');

function mensaje(color, mss){
    msg.style.color = color;
    msg.innerHTML = mss;
}

check.addEventListener('change', function(){
    if(this.checked){
        pass.type = 'text';
    } else {
        pass.type = 'password';
    }
});

form.addEventListener('submit', function(e){
    e.preventDefault();
    sesion(email.value, pass.value)
});

function sesion(email, pass){
    $.ajax({
        method: 'POST',
        url: 'http://localhost/web/scripts/backend/login.php',
        dataType: 'json',
        data: {email: email, pass: pass},
        success: function(res){
            if(res.email !== undefined){
                mensaje('blue', res.nombre + ' a iniciado correctamente');
                window.location.href = 'sesion/'
            } else{
                mensaje('red', 'Correo o contraseña incorrecto');
            }
        }
    });
}

