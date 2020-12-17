<?php
include 'index.php';
?>

<div class="container">
<table class="table">
    <thead>
        <tr>
            <td>#</td><td>Nombre</td><td>$$ Precio</td><td>Comprar</td>
        </tr>
    </thead>
    <tbody id='columna'>
        
    </tbody>
</table>

<button onclick="getProducts()" class="btn btn-info">Actuzalizar</button>

</div>

<script src="../scripts/frontend/getProducts.js"></script>