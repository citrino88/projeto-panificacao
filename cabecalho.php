<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Panificação e Bolos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
  @charset "UTF-8";

/* Todas as demais mídias */

:root {
    --cor-titulo: #65451f;
    --cor-descricao: #65451f;
    --cor-botao-escuro: #65451f;
    --cor-icones: #65451f;    
    --cor-topo-rodape: #cdc2ae;
    --cor-faixa: #765827;
    --cor-botao: #9c8250;
    --cor-preto: #000;
    --cor-branco: #fff;  
    --cor-dropdown: #ddcdb9;
    --cor-dropdown-hover: #a99f8e;   
}

#topo .bg{
    background-color: var(--cor-topo-rodape);
}

.dropdown-menu{
    background-color: var(--cor-dropdown);
}
.dropdown-item:hover{
    background-color: var(--cor-dropdown-hover);
}

.btn{
    background-color: var(--cor-botao);
    color: var(--cor-branco);
    font-weight: 500;
}
.btn-outline:hover{
    border-color: var(--cor-botao-escuro);
}

/* pagina bolos.php botoes categorias */
.caixa {
    width: 200px; 
height: 50px; 
border: 2px solid #ccc;
text-align: center;
line-height: 50px; 
cursor: pointer;
font-family: Arial, sans-serif;
font-size: 18px;
text-decoration: none;
display: block;
color: #333;
background-color: #C8AE7D; 
border-radius: 15px;
font-weight: bold;
}
.caixa:hover {
background-color: #e0e0e0;
}

.caixa:hover {
    background-color: #e0e0e0; 
}
.categorias {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#btn-categorias .btn{
    color: var(--cor-preto);
    border-color: var(--cor-botao-escuro);
    font-weight: 650;
}
.btn:hover{
    border-color: var(--cor-botao-escuro);
    background-color: var(--cor-topo-rodape);
    color: var(--cor-preto)
}
/* pagina bolos.php botoes categorias */    

/* pagina produtos */
.bg{
    background-color: var(--cor-botao-escuro);
}

.card img{
    height: 50%;
}

select{
    margin-bottom: 10px;
}
/* pagina produtos */


.destaque-bolos {
    height: 35vh;
    background-image: url(../img/im-fundo.jpg);
    background-attachment: fixed;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.destaque p{
    font-family: 'work-sans';
    margin-top: 0;
}

.nomeComida {
    font-size: 2.5rem;
}


.destaque-doces {
    height: 35vh;
    background-image: url(../img/fundo-doces.jpg);
    background-attachment: fixed;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
</style>


</head>
<body class="d-flex flex-column h-100">
    
<header id="topo" class="border-bottom sticky-top">

<nav class="shadow navbar navbar-expand-lg bg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <img src="imagens/logo.webp" width="80px" alt="">
        <p style="text-align: center;">Cake</p>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Página Inicial</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="produto.php">Página Produto</a></li>
            <li><a class="dropdown-item" href="doces.php">Doces</a></li>
            <li><a class="dropdown-item" href="salgados.php">Salgados</a></li>
            <li><a class="dropdown-item" href="paes.php">Pães</a></li>
            <li><a class="dropdown-item" href="bolos.php">Bolos</a></li>
            <li><hr class="dropdown-divider"></li>
            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php">Contato</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

</header>

<main class="flex-shrink-0">
    <div class="container">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
