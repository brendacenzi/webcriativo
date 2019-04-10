<!DOCTYPE html>
<html>
    <head>
        <title>Nosso Portolio | WebCriativo</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css" />
        <meta name="description" content="Portfolio dos sites feitos para clientes na WebCriativo"/>
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
            <h1><span>Nosso</span> Portfolio</h1>
            <hr>
            <div id="prj">
                <p>Conheça um pouco mais sobre nosso trabalho.</p>
                <?php
                    $xml = simplexml_load_file("portfolio.xml");
                    $i = 1;
                    foreach ($xml->projeto as $a) {
                        echo "
                            <div class='hoverzoom'>
                                <img src='resources/portfolio/" . $a->imagem . "' alt='Empresa " . $a->titulo . "'>
                                <div class='retina'>
                                    <h2>" . $a->titulo . "</h2>
                                    <p>" . $a->descricao . "</p>
                                    <a href=" . $a->url . " target='_blank' rel='nofollow'>Saiba mais</a>
                                </div>
                            </div>
                        ";
                        $i++;
                    }
                ?>
            </div>
        </main>
        <?php
            include("footer.php");
        ?>
    </body>
</html>
