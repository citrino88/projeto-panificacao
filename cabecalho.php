</div>
</main>
<style>
* {box-sizing: border-box;}

  .footer {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 30px;
    background-color: #cdc2ae;
    justify-content: center;
    align-items: center;
  }

  .logo,
  .contato,
  .redes-sociais {
    flex: auto;
    padding: 10px;
  }

  .contato h2,
  .redes-sociais h2,
  .copy h2 {
    margin-bottom: 10px;
  }

  a {
            text-decoration: none;
            color: #765827;
            font-weight: 500;
        }

  .copy {
    text-align: center;
    font-family: sans-serif;
  }

  @media screen and (max-width: 580px) {
    .footer {
      display: block;
      text-align: center;
    }

  
  }
</style>

<footer class="footer">
  <div class="logo">
    <img src="imagens/logo.webp" alt="Logo Cake" width="100" height="100">
  </div>

  <div class="contato">
    <h2>Entre em contato</h2>
    <p>Telefone: <a href="tel:+551195555555">(11) 2135-0300</a></p>
    <p>E-mail: <a href="mailto:panificacaocake@gmail.com">panificacaocake@gmail.com</a></p>
    <p>Endereço: Rua Francisco Coimbra, 403</p>
  </div>

  <div class="redes-sociais">
    <h2>Redes Sociais</h2>

    <a href="https://www.instagram.com/" target="_blank"><img src="imagens/instagram.png" alt="Icone instagram"></a>
    <a href="https://www.facebook.com/" target="_blank"><img src="imagens/facebook.png" alt="Icone facebook"></a>
    <a href="https://x.com/?lang=pt-br" target="_blank"><img src="imagens/twiter.png" alt="Icone twitter"></a>
  </div>


  </div>

</footer>

<div class="copy">
  <p>&copy; Todos os direitos reservados Grupo cake

    Panificação é um site fictício desenvolvido para fins didáticos | Senac Penha &copy; 2024
  </p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
