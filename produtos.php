<?php
require "cabecalho.php";
require "funcoes-produtos.php"; 
// esse id vem da noticia
// $id = $_GET['id'];
$listaDeNoticias = lerTodasNoticias($conexao);
?>  

<div class="row my-1 mx-md-n1">

        <!-- INÍCIO Card ******* AQUI abaixo vamos criar um Loop-->

<?php foreach($listaDeNoticias as $noticia) {?>

		<div class="col-md-6 my-1 px-md-1">
            <article class="card shadow-sm h-100">
                <a href="produto.php?id=<?=$noticia['id']?>" class="card-link">
                    <img src="img/<?=$noticia['imagem']?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h3 class="fs-4 card-title"><?=$noticia['titulo']?></h3>
                        <p class="card-text"><?=$noticia['descricao']?></p>
                        <p class="card-text"><?=$noticia['descricao']?></p>
                    </div>
                </a>
            </article>
		</div>
<?php } ?>        
		<!-- FIM Card -->

</div>         

<?php 
require_once "rodape.php";
?>