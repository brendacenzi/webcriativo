<!DOCTYPE html>
<html>
    <head>
        <title>Fale Conosco | WebCriativo</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css" />
        <meta name="description" content="Entre em contato com a WebCriativo e esclareça suas dúvidas a respeito dos nossos serviços"/>
        <meta name="robots" content="index, follow"> 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="script.js"></script>
        <meta name="viewport" content="width=device-width, user-scalable=no">
    </head>
    <body>
        <?php
            include("menu.php");
        ?>
        <main class="container">
            <h1><span>Fale</span> Conosco</h1>
            <hr>
            <div id="info">
                <div>
                    <h2>Mais <span>Informações</span></h2>
                    <hr>
                    <p><strong>Telefones</strong></p>
                    <img src="resources/icons/telefone.png" alt="ícone de telefone">
                    <p>
                        (13) 3027.8131 / 3379-1575 / 3379-1592<br>
                    </p>
                    <img src="resources/icons/whats.png" alt="ícone de celular">
                    <p>
                        (13) 97409-5030 
                    </p>
                    <p><strong>E-mail</strong></p>
                    <img src="resources/icons/email.png" alt="ícone de e-mail">
                    <p>
                        contato@webcriativo.com.br
                    </p>
                    <form id="fale" action="mail_send.php" name="form_contato" method="post">
                        <input type="text" name="nome" placeholder="Nome" required/>
                        <input type="email" name="email" placeholder="E-mail" required/>
                        <input type="number" name="tel" placeholder="Telefone (somente numeros)" required/>
                        <input type="text" name="assunto" placeholder="Assunto" required/>
                        <textarea placeholder="O que deseja?" rows="7" name="mensagem" required></textarea>
                        <input type="submit" name="" value="Enviar"/>
                    </form>
                </div>
                <div>
                    <h2>Onde <span>Estamos</span></h2>
                    <hr>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.99333978722!2d-46.25787928543281!3d-23.996012284468875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d1fe3022dc408f%3A0x4531a61391b2881f!2sShopping+Vilagio!5e0!3m2!1spt-BR!2sbr!4v1508946098421" width="600" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </main>
        <?php
            include("footer.php");
        ?>
    </body>
</html>
