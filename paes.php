<?php
require "cabecalho.php";
?>

<article class="destaque-doces">
    <h2 class= "nomeComida">Pães artesanais</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, illum!</p>
</article>

<div class="categorias">
    <h2>Selecione a categoria</h2>
    <a href="paes.php" class="caixa">PÃES ARTESANAIS</a>
    <a href="doces.php" class="caixa">DOCES</a>    
    <a href="salgados.php" class="caixa">SALGADOS</a>
    <a href="bolos.php" class="caixa">BOLOS CASEIROS</a>
</div>    


<hr>
<!-- Adicione este espaço reservado para o carrinho -->
<div id="cart" class="cart">
    <h3>Carrinho de Compras</h3>
    <ul id="cart-items"></ul>
</div>

<div class="row p-2">
    <div class="shadow col card mx-2 h-50" style="width: 18rem;">
        <img src="img/pao-de-forma.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Pão-de-Forma</h5>
            <p class="card-text">Pão tradicional de forma.</p>
            <button class="btn btn-primary add-to-cart" data-product="Pão-de-Forma">Adicionar</button>
        </div>
    </div>
    <div class="shadow col card mx-2 h-50" style="width: 18rem;">
        <img src="img/pao-recheado-beirute.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Pão-Recheado-Beirute</h5>
            <p class="card-text">Pão recheado de beirute.</p>
            <button class="btn btn-primary add-to-cart" data-product="Pão-Recheado-Beirute">Eu quero</button>
        </div>
    </div>
</div>

<div class="row p-2">
    <div class="shadow col card mx-2 h-50" style="width: 18rem;">
        <img src="img/pao-alecrim.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Pão Alecrim</h5>
            <p class="card-text">Pão artesanal de Alecrim.</p>
            <button class="btn btn-primary add-to-cart" data-product="Pão Alecrim">Adicionar</button>
        </div>
    </div>
    <div class="shadow col card mx-2 h-50" style="width: 18rem;">
        <img src="img/pao-7-graos-queijo.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Pão de Grão-de-Queijo</h5>
            <p class="card-text">Pão artesanal de grãos de queijo.</p>
            <button class="btn btn-primary add-to-cart" data-product="Pão de Grão-de-Queijo">Eu quero</button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const buttons = document.querySelectorAll('.add-to-cart');
        const cartItems = document.getElementById('cart-items');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const product = button.getAttribute('data-product');
                addToCart(product);
            });
        });

        function addToCart(product) {
            const li = document.createElement('li');
            li.textContent = product;

            const removeButton = document.createElement('button');
            removeButton.textContent = 'Remover';
            removeButton.classList.add('btn', 'btn-danger', 'ml-2');
            removeButton.addEventListener('click', () => {
                li.remove();
            });

            li.appendChild(removeButton);
            cartItems.appendChild(li);
        }
    });
</script>





    <?php
    require_once "rodape.php";
    ?>