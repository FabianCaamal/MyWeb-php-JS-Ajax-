var close = document.getElementById('close');
var abrir = document.getElementById("abrir");
var modal = document.querySelectorAll('.mi-modal')[0];
var modalC = document.querySelectorAll('.mi-modal-container')[0];

let buy = document.getElementById('confirmBuy');

abrir.addEventListener('click', function(e){
    e.preventDefault();
    modalC.style.opacity = '1';
    modalC.style.visibility = 'visible';
    modal.classList.toggle('mi-modal-close');
});

close.addEventListener('click', function(){
    modal.classList.toggle('mi-modal-close');
    modalC.style.opacity = '0';
    modalC.style.visibility = 'hidden';
});

buy.addEventListener('click', function(){
    console.log('Gracias por su compra :) ')
});