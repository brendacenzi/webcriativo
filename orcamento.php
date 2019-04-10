<!DOCTYPE html>
<html>
    <head>
        <title>Orçamento Gratuito | WebCriativo</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css" />
        <meta name="description" content="Faça um orçamento gratuito para seu site, blog ou e-commerce"/>
        <meta name="robots" content="index, follow"> 
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <?php
            include("menu.php");
        ?>
        <main class="container">
            <h1><span>Orçamento</span> Gratuito</h1>
            <hr>
            <div id="msg-orca">
                <p>Do que você precisa?</p>
                <p>Quer montar um site, loja virtual ou sua identidade visual?</p>
                <p>Nos envie seus dados, analisaremos seu projeto e enviaremos uma proposta diretamente para seu e-mail em 24 horas.</p>
            </div>
            <div id="orca">
                <form id="fale"  action="mail_send1.php" name="form_fale" method="post">
                    <input type="text" name="nome" placeholder="Nome" required/>
                    <input type="email" name="email" placeholder="E-mail" required/>
                    <input type="number" name="tel" placeholder="Telefone (somente numeros)" required/>
                    <textarea placeholder="O que deseja?" rows="7" required></textarea>
                    <input type="submit" name="" value="Enviar"/>
                </form>
            </div>
        </main>
        <?php
            include("footer.php");
        ?>
    </body>
</html>
