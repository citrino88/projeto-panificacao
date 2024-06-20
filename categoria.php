<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        :root {
    --cor-titulo: #65451f;
    --cor-descricao: #65451f;
    --cor-escura: #000;
    --cor-clara: #fff;
    --cor-topo-rodape: #cdc2ae;
    --cor-faixa: #765827;
    --cor-botao: #9c8250;
    --cor-botao-escuro: #65451f;
    --cor-icones: #65451f;
} 
        .cabecalho{
            background-color: var(--cor-topo-rodape);    
            display: flex;        
        }
        .cabecalho a{
            text-decoration: none;
            color: var(--cor-titulo);
        }
        .links-menu{
            list-style: none;
            display: flex;
        }
        .links-menu a {
            text-transform: uppercase;
            color: var(--cor-escura);
            font-weight: bold;
            display: flex;
            height: 50px;    
            justify-content: center;
            align-items: center;
            background-color: var(--cor-botao);
        }
        
        /* Alternativa se não fosse usar o bootstrap*/
/*
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
        */

.categorias {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
figure img{
    width: 100%; 
    display: block; 
    margin: 0; 
    padding: 0;
}
.destaque {
    background-image: url(css/imagens/im-fundo.jpg);
    background-attachment: fixed;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 32vh; 
    font-size: 1.5rem;
}
.destaque article, p{
   font-style: var(--cor-clara);
   font-family:'work-sans';
}
    </style>
</head>
<body>
    <header>
        <div class="cabecalho" >
            <h1><a href="index.html">Cake</a></h1>
            <nav>
                <h2><a href="">Menu</a></h2>
                <ul class="links-menu" >
                    <li><a href="index.html">Início</a></li>
                    <li><a href="produtos.html"></a>Produtos</li>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>






    <article class="destaque">
        <h2>BOLOS CASEIROS</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, illum!</p>
    </article>
    <div class="categorias d-grid gap-2" >
    <h2>Selecione a categoria</h2>
<a href="categoria-doces.html" class="caixa"><button>DOCES</button></a>
<a href="categoria-paesArtesanais.html" class="caixa"><button>PÃES ARTESANAIS</button></a>
<a href="categoria-salgados.html" class="caixa"><button>SALGADOS</button></a>
<a href="categoria-doces.html" class="caixa"><button>BOLOS CASEIROS</button></a>
</div>






<footer>
        <div class="rodape-links">
            <a href="">HOME PAGE</a>
            <a href="">SOBRE</a>
            <a href="">PRODUTOS</a>
            <a href="">CONTATO</a>
        </div>
        <div class="rodape-contato">
            <p>Telefone: <a href="tel:+551195555555">(11) 95555-5555</a></p>
            <p>E-mail: <a href="mailto:contato@meuemail.com">contato@meuemail.com</a></p>
            <p>LOCALIZAÇÃO: Av. Brasil, 5500</p>
        </div>
        <div class="rodape-info">
            <p>Desenvolvido por © Grupo Cake</p>
        </div>
    </footer>
    

</body>
</html>