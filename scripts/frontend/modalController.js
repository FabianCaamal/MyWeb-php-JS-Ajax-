let contar = 0;

function agregar(btn){
    contar++;
    console.log('Agregar producto con el id:', btn);
    $('#count').text(contar)
}