<?php
require "cabecalho.php";
?>

<article class="destaque-doces">
    <h2 class= "nomeComida">Salgados</h2>
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
<div class="bg p-2 text-white bg-opacity-75">This is 75% opacity success background
<br>
Aqui é pra colocar uma imagem banner
</div>

<hr>

<div class="row p-2">
<div class="shadow col card mx-2 h-50" style="width: 18rem;">
  <img src="img/torrada-pizza.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Torrada-Pizza</h5>
    <p class="card-text">Torrada com recheios de pizza.</p>
    <a href="#" class="btn btn-primary">Adicionar</a>
  </div>
</div>
<div class="shadow col card mx-2 h-50" style="width: 18rem;">
  <img src="img/pao-recheado-beirute.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pão-Recheado-Beirute</h5>
    <p class="card-text">Pão recheado de beirute.</p>
    <a href="#" class="btn btn-primary">Eu quero</a>
  </div>
</div>
</div>


<div class="row p-2">
    <div class="shadow col card mx-2 h-50" style="width: 18rem;">
        <img src="img/croissant.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Croissant</h5>
            <p class="card-text">Croissant de frango.</p>
            <a href="#" class="btn btn-primary">Adicionar</a>
        </div>
    </div>
    <div class="shadow col card mx-2 h-50" style="width: 18rem;">
        <img src="img/torta-queijo.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Torta de queijo</h5>
            <p class="card-text">Torta de queijo.</p>
            <a href="#" class="btn btn-primary">Eu quero</a>
        </div>
    </div>
</div>


    <?php
    require_once "rodape.php";
    ?>