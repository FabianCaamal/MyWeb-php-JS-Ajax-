let tabla = document.getElementById('columna');

function getProducts(){
    $.ajax({
        method: 'GET',
        url: 'http://localhost/web/scripts/backend/getProducts.php',
        dataType: 'json',
        success: function(res){
            var html = '';

            for(var i=0; i < res.length; i++){
                html += '<tr>' + 
                    '<td>' + (i + 1) + '</td>' +
                    '<td>' + res[i].nombre + '</td>' +
                    '<td>' + res[i].precio + '</td>' +
                    '<td>' + '<button onclick="agregar('+res[i].id+')" class="btn btn-info">$$</button>' + '</td>' +
                '</tr>';
            }
            tabla.innerHTML = html;
        }
    })
}

function agregar(btn){
    contar++;
    console.log('Agregar producto con el id:', btn);
    $('#count').text(contar)
}

getProducts();