<!DOCTYPE html>
<html>
    <head>
        <title>WebCriativo - Soluções Web</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css"/>
        <meta name="description" content="Fazemos todos os serviços de criação de sites em São Paulo e na Baixada Santista"/>
        <meta name="robots" content="index, follow"> 
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <img src="resources/icons/menu.png" id="ic-menu" onclick="mostraMenu2()" alt="ícone para menu">
        <nav id="menu-index">
            <img src="resources/logo.png" id="logotipo-index" alt="logotipo WebCriativo">
            <ul>
                <li><a href="servicos">Nossos serviços</a></li>
                <li><a href="portfolio">Portfolio</a></li>
                <li><a href="orcamento">Orçamento</a></li>
                <li><a href="grafica" target="_blank">Gráfica comercial</a></li>
                <li><a href="perguntas">Perguntas frequentes</a></li>
                <li><a href="fale-conosco">Fale conosco</a></li>
            </ul>
        </nav>
        <main id="index">
            <div id="banner-cel" class="tam">
                <img src="resources/logo.png" alt="logotipo WebCriativo">
            </div>
            <video autoplay loop>
                <source src="resources/fundo.mp4" type="video/mp4">
            </video>
            <div id="sobre">
                <p>
                    A WebCriativo é uma Agência de Soluções Web desde 1999.
                </p>
                <hr>
                <p>
                    Desenvolvemos e os codificamos websites interativos para melhor atender as necessidades dos nossos clientes, disponibilizamos total controle para personalização, inclusão e alteração de conteúdo.
                </p>
                <p>
                    Sistemas completos que vão desde sites para divulgação de imagem, blogs e lojas virtuais.
                </p>
                <img src="resources/computador.jpg" alt="computador, tablet e celular">
            </div>
            <div id="serv" class="tam">
                <a href="/servicos">
                    <div>
                        <img src="resources/icons/criacao.png" alt="ícone criação de site">
                        <p>Criação de Sites</p>
                    </div>
                    <div>
                        <img src="resources/icons/consultoria.png" alt="ícone consultoria web">
                        <p>Consultoria Web</p>
                    </div>
                    <div>
                        <img src="resources/icons/seo.png" alt="ícone seo">
                        <p>Otimização SEO</p>
                    </div>
                    <div>
                        <img src="resources/icons/identidade.png" alt="ícone identidade visual">
                        <p>Identidade Visual</p>
                    </div> 
                    <div>
                        <img src="resources/icons/hospedagem.png" alt="ícone hospedagem">
                        <p>Hospedagem de Sites</p>
                    </div>
                    <div>
                        <img src="resources/icons/gestao.png" alt="ícone gestão de marketing">
                        <p>Gestão de Marketing</p>
                    </div>
                </a>
            </div>
            <div id="portfolio">
                <h1><span>Nosso</span> Portfolio</h1>
                <hr>
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
                        if($i == 7)
                            break;
                    }
                ?>
                <div id="separa"></div>
                <a href="portfolio" id="conheca">>> Conheça outros projetos</a>
            </div>
            <div id="interesse" class="tam">    
                <img src="resources/nuvem.jpg" alt="nuvem (design visual)">
                <p>Se interessou em nosso trabalho?</p>
                <p>Faça um orçamento gratuito... É rapidinho!</p><br>
                <a href="orcamento">Criar orçamento</a>
            </div>
            <div id="social" class="tam">
                <div>
                    <p>Siga-nos nas redes sociais</p>
                    <div id="icons">
                        <a href="https://www.facebook.com/webcriativo/" target="_blank"><img src="resources/icons/facebook.png" alt="ícone facebook"></a>
                        <a href="https://www.instagram.com/webcriativo/" target="_blank"><img src="resources/icons/instagram.png" alt="ícone instagram"></a>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2167.3229090423606!2d-46.25671727037189!3d-23.9961962588583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d1fe3022dc408f%3A0x4531a61391b2881f!2sShopping+Vilagio!5e0!3m2!1spt-BR!2sbr!4v1508941043721" width="600" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div id="contato" class="tam">
                <h2><span>Fale</span> Conosco</h2>
                <p>Entre em contato conosco e te retornaremos o mais rápido possível</p>
                <a href="mailto:contato@webcriativo.com.br" id="email"><p>contato@webcriativo.com.br</p></a>
                <img src="resources/icons/telefone-branco.png" alt="ícone telefone">
                <p>
                    (13) 3027.8131 / 3379-1575 / 33791-592<br>
                </p>
                <img src="resources/icons/whats-branco.png" alt="ícone celular">
                <p id="tel">
                    (13) 97409-5030 
                </p>
            </div>
        </main>
        <footer>
            <hr>
            <p>WebCriativo 2017. Todos os direitos reservados.</p>
        </footer>
    </body>
</html>