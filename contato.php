<?php require_once "cabecalho.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato Cake</title>
    <style>
        * {box-sizing: border-box;}

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

        .header {
            position: sticky;
            top: 0;
            background-color: var(--cor-clara);
            z-index: 1;
        }

        .conteudo {
            background-color: #f3efef73;
            padding: 1.5rem;
            border-radius: 8px;
            height: auto;
            margin: auto;
        }

        input,
        select,
        textarea {

            padding: 4px;
            height: 40px;
            border-radius: 4px;
            background-color: rgb(250, 247, 247);
            border: solid thin #f0efec;
        }

        textarea {
            height: auto;
        }

        form div {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.5rem;
        }

        label {
            font-size: 0.9rem;
            width: 10%;
            font-family: sans-serif;
        }

        form div *:not(label) {
            width: 80%;
        }

        .form_box {
            background-color: #dbd4c7;
            margin: 0 auto;
            padding: 20px;
        }

        .form_box .titulo {
            padding: 24px 50px;
            font-size: 2rem;
            font-family: raleway;
            border-bottom: thin solid #ccc;
        }


        button {
            background-color: var(--cor-botao);
            color: #fff;
            cursor: pointer;
            border: none;
            padding: 1rem 0.5rem;
            margin-top: 20px;
            border-radius: 5px;

            margin-left: 40vw;
        }

        .form_box button:hover {
            background-color: var(--cor-botao-escuro);
        }

        .container {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
        }

        .banner {
            background-image: url(img/sobremesa.jpg);
            display: flex;
            height: 50vh;
            background-attachment: fixed;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .banner h2 {
            color: white;
            padding-top: 50px;
            font-size: 3.5rem;
            font-family: nunito, sans-serif;
        }

        .banner p {
            color: white;
            font-family: nunito, sans-serif;
            font-size: 1.5rem;
            text-align: center;
        }

        h2 {
            font-family: raleway, sans-serif;
        }

         button {
            margin-left: auto;
        }
    </style>
</head>

<body>
    </div>
    </header>

    <main>
        <section class="banner">
            <h2>Contato</h2>
            <p>Oferecemos diariamente a melhor experiência e sabores para você!</p>
        </section>
        <article class="conteudo limitador">
            <div class="container">
                <div class="form_box">

                    <h2>Deixe sua mensagem!</h2>
                    <p style="padding-bottom: 30px;">Preencha o formulário abaixo, com sua dúvida, sugestão ou reclamação.</p>
                    <hr>
                    <form action="https://formspree.io/f/mvgpplen" method="post" autocomplete="off">

                        <div>
                            <label for="nome">Nome:</label>
                            <input required placeholder="Seu nome" type="text" name="nome" id="nome">
                        </div>
                        <div>
                            <label for="email">Email:</label>
                            <input required placeholder="Seu email" type="email" name="email" id="email">
                        </div>

                        <div>
                            <label for="telefone">Telefone:</label>
                            <input required placeholder="Seu telefone" type="tel" name="telefone" id="telefone">
                        </div>
                        <div>
                            <label for="assunto">Assunto:</label>
                            <select name="assunto" id="assunto">
                                <option value=""></option>
                                <option value="">Dúvidas</option>
                                <option value="">Reclamações</option>
                                <option value="">Outros</option>
                            </select>
                        </div>
                        <div>
                            <label for="mensagem">Mensagem:</label>
                            <textarea required placeholder="Digite aqui sua mensagem" name="mensagem" id="mensagem" cols="50" rows="10"></textarea>
                        </div>
                        <div class="text-align:center">
                            <button type="submit">Enviar Mensagem</button>
                        </div>
                    </form>
                    <p id="status-do-envio"></p>

                </div>
            </div>
        </article>
    </main>

    <footer>

        <?php
        require_once "rodape.php";
        ?>
    </footer>

</body>

</html>
