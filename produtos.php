<?php
require "cabecalho.php";
require "funcoes-produtos.php"; 
// esse id vem da noticia
// $id = $_GET['id'];
$listaDeProdutos = lerTodasNoticias($conexao);
?>  

<div class="row my-1 mx-md-n1">

        <!-- INÍCIO Card ******* AQUI abaixo vamos criar um Loop-->

<?php foreach($listaDeProdutos as $produto) {?>

		<div class="col-md-6 my-1 px-md-1">
            <article class="card shadow-sm h-100">
                <a href="produto.php?id=<?=$produto['id']?>" class="card-link">
                    <img src="img/<?=$produto['imagem']?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h3 class="fs-4 card-title"><?=$produto['titulo']?></h3>
                        <p class="card-text"><?=$produto['descricao']?></p>
                        <p class="card-text">R$<?=$produto['preco']?></p>
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