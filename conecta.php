<?php 
/* Script de conexão com o servidor de banco de dados */

// Parâmeros para conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "paes_doces";

// Função para conexão com o servidor de banco de dados, colocamos dentro de uma variável abaixo conexao
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

//
mysqli_set_charset($conexao, "utf8");

/* Fazendo um teste de conexão */
/* if ( !$conexao ) {
    // Deu problema? "Mate/Pare" a aplicação!
    die("Deu ruim: " .mysqli_connect_error());
} else {
    echo "Beleza, conectado...";
} 
*/
?>