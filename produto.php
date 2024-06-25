<?php
require "cabecalho.php";
?>

<div class="row p-2">
<div class="shadow col card mx-2" style="width: 18rem;">
  <img src="img/bolo-chocolate-maracuja.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h6>Categoria</h6>
    <h5 class="card-title">Bolo de Chocolate e Maracujá</h5>
    <hr>
    <p class="card-text">Bolo de Chocolate e Maracujá.</p>
       <label for="assunto">Tamanho:</label>
          <select name="assunto" id="assunto">
               <option value=""></option>
               <option>15 cm</option>
               <option>22 cm</option>
          </select>
               
    <a href="#" class="btn">Adicionar</a>
  </div>
</div>
</div>

<h3>PRODUTOS RELACIONADOS</h3>
<div class="row p-2">
<div class="shadow col card mx-2" style="width: 18rem;">
  <img src="img/bolo-chocolate-maracuja.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bolo de Chocolate e Maracujá</h5>
    <p class="card-text">Bolo de Chocolate e Maracujá.</p>
    <a href="#" class="btn">Adicionar</a>
  </div>
</div>
<div class="shadow col card mx-2" style="width: 18rem;">
  <img src="img/bolo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bolo de Creme com Frutas</h5>
    <p class="card-text">Bolo de Creme com Frutas, massa branca e cobertura de creme de nata.</p>
    <a href="#" class="btn">Eu quero</a>
  </div>
</div>
</div>

<div class="bg p-2 text-white bg-opacity-75">This is 75% opacity success background
<br>
Aqui é pra colocar uma imagem banner
</div>

<hr>

<div class="bg p-2 text-white bg-opacity-75">This is 75% opacity success background
<br>
Aqui é pra colocar uma imagem banner
</div>


    <?php
    require_once "rodape.php";
    ?>