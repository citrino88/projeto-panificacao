<?php 
require_once "cabecalho.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
    
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');

* { box-sizing: border-box; }

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

html {
  overflow-x: hidden;
  margin: 0;
  width: 100%;
}

body {
  margin: 0;
  padding: 0;
  height: 100%;
  background-color: #d1cfce;
  overflow-x: hidden;
  width: 100%;
}

.overlay {
  background-image: url(imagens/fundo.jpg);
  background-size: cover;
  background-position: center;
  height: 65vh; 
  width: 100vw;  
  display: flex;
  color: var(--cor-clara);
  padding: 20px;
  flex-direction: column;
  align-items: center;
}

.overlay h2 {
  padding-top: 8rem;
  font-size: 2.5rem;
  font-family: 'work-sans';
  font-weight: bolder;
}

.overlay p {
  margin-top: 0;
  text-align: center;
  margin-right: 10px;
  padding-right: 15px;
}

#carouselExample {
  padding: 15px;
  margin-top: 10px;
}

.destaques {
  background-color: #7a5726;
  color: #ffffff;
  text-align: center;
  padding: 10px;
  margin-top: 1.5rem;
}

#carouselExample h2 {
  color: var(--cor-titulo);
  font-size: 1.5rem;
  text-align: center;
  margin-top: 7px;
}

#carouselExample p {
  text-align: center;
  color: black;
  font-weight: bold;
  margin-bottom: 5px;
}

.carousel-item img{
  border-radius: 20px;
}

.faleconosco {
  background-image: url(imagens/Encomenda.jpg);
  background-position: center;
  text-align: center;
  padding: 13px 0;
  margin-bottom: 25px;
}

.faleconosco h2 {
  color: #d6d5d5;
  margin: 0;
  font-size: 24px;
}

.botao {
  background-color: #7a5726;
  color: #ffffff;
  border: none;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
}

hr {
  border: none;
  height: 3px;
  background-color: black;
  width: 65%; 
  margin: 20px auto;
  margin-top: 10px;
}

.produtos h2 {
  text-align: center;
  color: var(--cor-titulo);
  font-weight: bold;
  margin-bottom: 1rem;
}

.bloco-imagens { 
  display: grid;
  grid-template-columns: repeat(2, 1fr);;
  gap: 20px;
  padding: 20px;
  max-width: 1200px;
  margin: 0 auto;
}

.bloco-imagens h2 {
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  width: 40%;
  text-align: center;
  padding: 10px 0;
  border-radius: 0 0 10px 10px;
  font-size: 1rem;
  text-transform: uppercase;
}

.itens {
  margin: 5px;
  border-radius: 10px;
  margin-left: 1.5rem;
  width: 200%;

}

.itens h2 { font-size: 13px }

.itens img {
  border-radius: 10px 10px 0 0;
}


@media screen and (min-width: 570px) {
  .itens { margin-left: 1rem; }
  .itens h2 { font-size: 15px }

  .container p { font-size: 20px; }
  .container h2 { font-size: 50px; }
  .container { margin-left: 0;
               margin-right: auto; }

}

@media screen and (min-width: 1000px) {
  .itens { margin-left: 2rem; }

  .container { font-size: 35px; }
  
  .bloco-imagens {
    grid-template-columns: repeat(3, 1fr);}
  
  .overlay h2 { font-size: 80px; }
  .overlay p { font-size: 20px; }
  
  #carouselExample { 
    padding-top: 40px; 
    width: 40vw;
    margin: auto;
  }

}


    </style>
</head>
<body>

<main>

    <article class="overlay">
        <h2>Doces</h2>
        <p>Doces são uma deliciosa tentação, presentes em diversas culturas ao redor do mundo. Desde chocolates cremosos a balas coloridas, cada tipo de doce traz consigo uma explosão de sabores e texturas. Além disso, a confeitaria é uma verdadeira arte, onde confeiteiros criam obras-primas que encantam os olhos e o paladar.</p>
    </article>
  </div>

<article>
  <div class="destaques">
  <h2>
    Confira os Destaques!
  </h2>
</div>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/Bolos.jpg" class="d-block w-100" alt="Bolo de chocolate">
      <h2>Bolo de chocolate</h2>
      <p>Fatia: R$37,00</p>
      <p>Inteiro: R$110,00</p>
    </div>
    <div class="carousel-item">
      <img src="imagens/Cookies.jpg" class="d-block w-100" alt="Cookies com gotas de chocolate">
      <h2>Cookies com gotas de chocolate</h2>
      <p>Porção de três: R$7,00</p>
    </div>     
    <div class="carousel-item">
      <img src="imagens/Crossaint.jpg" class="d-block w-100" alt="Crossaint">
      <h2>Crossaint</h2>
      <p>Doce e Salgada: R$12,00</p>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</article>

<hr>

<article>
  <div class="produtos">
  <h2>Produtos</h2>
  </div>

  <div class="bloco-imagens">
    <div class="itens">
    <img src="imagens/Bolo2.jpg" alt="Bolos" width="40%" height="85%">
    <h2>Bolos</h2>
  </div>
    <div class="itens">
    <img src="imagens/Pão-de-mel.jpg" alt="Pão de Mel" width="40%" height="85%">
    <h2>Pães de Mel</h2>
  </div>
    <div class="itens">
    <img src="imagens/Muffins.jpg" alt="Muffins" width="40%" height="85%">
    <h2>Muffins</h2>
  </div>
    <div class="itens">
    <img src="imagens/Mini-torta.jpg" alt="Mini Tortas" width="40%" height="85%">
    <h2>Mini Tortas</h2>
  </div>   
    <div class="itens">
    <img src="imagens/Crossaint2.jpg" alt="Mini Tortas" width="40%" height="85%">
    <h2>Crossaint Recheado</h2>
  </div>   
    <div class="itens">
    <img src="imagens/Sorvete.jpg" alt="Mini Tortas" width="40%" height="85%">
    <h2>Sorvete Artezanal</h2>
  </div>   
    <div class="itens">
    <img src="imagens/Macarons.jpg" alt="Mini Tortas" width="40%" height="85%">
    <h2>Macarons</h2>
  </div>   
    <div class="itens">
    <img src="imagens/Tortas.jpg" alt="Mini Tortas" width="40%" height="85%">
    <h2>Tortas</h2>
  </div>   
    <div class="itens">
    <img src="imagens/Pão Artesanal.jpg" alt="Pão Artesanal" width="40%" height="85%">
    <h2>Pão Artesanal</h2>
  </div>   
</div>

</article>

<hr style="margin-top: 2rem; margin-bottom: 2rem;">

<article>
  <div class="faleconosco">
        <h2>Faça sua encomenda!</h2>
        <button class="botao">Fale Conosco</button>
</article>
  </div>


</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
<?php 
require_once "rodape.php";
?>

</body>
</html>
