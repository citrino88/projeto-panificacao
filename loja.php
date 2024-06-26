<?php
require "cabecalho.php";
?>

    <!-- <main class="main-section"> -->
      <section class="container normal-section">
        <h2 class="section-title">Produtos</h2>

        <div class="products-container">
          <div class="movie-product">
            <strong class="product-title">Produto 1</strong>
            <!-- <br> -->
            <img src="img/biscoito-mesclado.jpg" alt="Poster 1" class="product-image">
            <div class="product-price-container">
              <span class="product-price">R$29,99</span>
              <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
            </div>
          </div>

          <div class="movie-product">
            <strong class="product-title">Produto 2</strong>
            <!-- <br> -->
            <img src="img/bolo-choc-flores.jpg" alt="Poster 2" class="product-image">
            <div class="product-price-container">
              <span class="product-price">R$39,99</span>
              <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
            </div>
          </div>
  
          <div class="movie-product">
            <strong class="product-title">Produto 3</strong>
            <!-- <br> -->
            <img src="img/bolo-choc-morango-beijinho.jpg" alt="Poster 3" class="product-image">
            <div class="product-price-container">
              <span class="product-price">R$19,99</span>
              <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
            </div>
          </div>
  
          <div class="movie-product">
            <strong class="product-title">Produto 4</strong>
            <!-- <br> -->
            <img src="img/bolo-chocolate-maracuja.jpg" alt="Poster 4" class="product-image">
            <div class="product-price-container">
              <span class="product-price">R$79,99</span>
              <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
            </div>
          </div>
        </div>
      </section>

      <section class="container normal-section">
        <h2 class="section-title">Outros Produtos</h2>

        <div class="products-container">
          <div class="movie-product">
            <strong class="product-title">Produto 5</strong>
            <!-- <br> -->
            <img src="img/bolo-chocolate.jpg" alt="Produto" class="product-image">
            <div class="product-price-container">
              <span class="product-price">R$39,90</span>
              <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
            </div>
          </div>

          <div class="movie-product">
            <strong class="product-title">Produto 6</strong>
            <!-- <br> -->
            <img src="img/bolo-de-cenoura.jpg" alt="Miniatura" class="product-image">
            <div class="product-price-container">
              <span class="product-price">R$69,90</span>
              <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
            </div>
          </div>
        </div>
      </section>

      <section class="container normal-section">
        <h2 class="section-title">Carrinho</h2>

        <table class="cart-table">
          <thead>
            <tr>
              <th class="table-head-item first-col">Item</th>
              <th class="table-head-item second-col">Preço</th>
              <th class="table-head-item third-col">Quantidade</th>
            </tr>
          </thead>

          <tbody>
            <!-- <tr class="cart-product">
              <td class="product-identification">
                <img src="images/produto2.png" alt="Miniatura" class="cart-product-image">
                <strong class="cart-product-title">Miniatura</strong>
              </td>
              <td>
                <span class="cart-product-price">R$69,90</span>
              </td>
              <td>
                <input type="number" value="2" min="0" class="product-qtd-input">
                <button type="button" class="remove-product-button">Remover</button>
              </td>
            </tr>
            <tr class="cart-product">
              <td class="product-identification">
                <img src="images/poster3.png" alt="Poster 3" class="cart-product-image">
                <strong class="cart-product-title">Poster 3</strong>
              </td>
              <td>
                <span class="cart-product-price">R$19,99</span>
              </td>
              <td>
                <input type="number" value="1" min="0" class="product-qtd-input">
                <button type="button" class="remove-product-button">Remover</button>
              </td>
            </tr> -->
          </tbody>

          <tfoot>
            <tr>
              <td colspan="3" class="cart-total-container">
                <strong>Total</strong>
                <span>R$0,00</span>
              </td>
            </tr>
          </tfoot>
        </table>

        <button type="button" class="purchase-button">Finalizar Compra</button>
      </section>
    </main>

    <!-- 
    <script>
        function gotowhatsapp() {

            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;
            var email = document.getElementById("email").value;
            var service = document.getElementById("service").value;

            var url = "https://wa.me/918789529215?text="
                + "Name: " + name + "%0a"
                + "Phone: " + phone + "%0a"
                + "Email: " + email + "%0a"
                + "Service: " + service;

            window.open(url, '_blank').focus();
        }
    </script>

    ou
    
    btn onclick="sendTOWhatsapp()" 

    <script>
        function sendToWhatsapp() {
            let number = document.getElementById("phone").value; moi

            var name = document.getElementById("name").value;
            
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;

            var url = "https://wa.me/" + number + "?text="
                + "Name: " + name + "%0a"
                + "Phone: " + phone + "%0a"
                + "Email: " + email + "%0a"
                + "Message: " + message + "%0a%0a";

            window.open(url, '_blank').focus();
        }
    </script>
    -->

    <?php
require_once "rodape.php";
?>