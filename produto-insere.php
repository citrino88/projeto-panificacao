<?php 
require_once "cabecalho.php";
require_once "funcoes-produtos.php";

if(isset($_POST['inserir'])){
	$titulo = $_POST['titulo'];
	$descricao = $_POST['texto'];
	$preco = $_POST['preco'];
	$categoria = $_POST['categoria'];
	// $resumo = $_POST['resumo']; TIREI ISSO AQUI

	/* Obtendo o id do usuário que está logado e inserindo a notícia. Portanto, a notícia será associada ao usuário devido ao uso de chave estrangeira e relacionamento no banco. */
	// $usuarioId = $_SESSION['id']; NÃO VAI TER

	/* Capturando dados do arquivo enviado (imagens, pdf, .doc, etc...); pega os dados e transforma num Array */
	$imagem = $_FILES['imagem'];

	/* Fazendo o upload da imagem para o servidor */
	upload($imagem);

	/* Enviar dados para o banco de dados */
	inserirNoticia($conexao, $titulo, $descricao, $preco, $imagem['name'], $categoria);
	/* acima temos via post/form titulo, texto, resumo; Do usuario q inseiu imagem; da SESSION vem o usuarioId */

	header("location:bolos.php");
}

?>


<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Inserir novo produto
		</h2>
		
		<!-- Se seu formulário vai enviar arquivos, então ele PRECISA TER O 'ENCTYPE=MULTIPART/FORM-DATA' -->
		<!-- O atributo enctype com o valor indicado é necessário quando queremos que o formulário aceite o envio/processamento de arquivos de qualquer natureza. -->
		<form enctype="multipart/form-data" autocomplete="off" class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">            

			<div class="mb-3">
                <label class="form-label" for="titulo">Título:</label>
                <input class="form-control" required type="text" id="titulo" name="titulo" >
			</div>

			<div class="mb-3">
                <label class="form-label" for="texto">Descrição do Produto:</label>
                <textarea class="form-control" required name="texto" id="texto" cols="50" rows="6"></textarea>
			</div>
			<!-- TIREI ISSO DAQUI -->
			<!-- <div class="mb-3">
                <label class="form-label" for="resumo">Outras informações:</label>
                <span id="maximo" class="badge bg-danger">0</span>
                <textarea class="form-control" required name="resumo" id="resumo" cols="50" rows="2" maxlength="300"></textarea> 
			</div> -->
			<div class="mb-3">
                <label class="form-label" for="preco">Preço:</label>
                <input class="form-control" required type="number" step="0.01" id="preco" name="preco" >
			</div>

			<div class="mb-3">
				<label class="form-label" for="categoria">Categoria:</label>
				<select class="form-select" name="categoria" id="categoria" required>
					<option value=""></option>
					<option value="paes">Paes</option>
					<option value="doces">Doces</option>
					<option value="salgados">Salgados</option>
					<option value="bolos">Bolos</option>
				</select>
			</div>

			<div class="mb-3">
                <label class="form-label" for="imagem" class="form-label">Selecione uma imagem:</label>
                <input required class="form-control" type="file" id="imagem" name="imagem"
                accept="image/png, image/jpeg, image/gif, image/svg+xml">
			</div>
			

			<button class="btn btn-primary" id="inserir" name="inserir"><i class="bi bi-save"></i> Inserir</button>
		</form>
		
	</article>
</div>


<?php 
require_once "rodape.php";
?>

