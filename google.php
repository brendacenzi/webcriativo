<!DOCTYPE html>
<html>
    <head>
        <title>Utilização do Adwords | WebCriativo</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css" />
        <meta name="description" content="Como utilizar o adwords, como funciona e quais suas vantagens"/>
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
            <h1><span>Anúncios</span> Google</h1>
            <hr>
            <ul id="submenu">
                <li onclick="mostrar(0)">Google</li>
                <li onclick="mostrar(1)">Como anunciar</li>
                <li onclick="mostrar(2)">Como funciona</li>
                <li onclick="mostrar(3)">Custos</li>
            </ul>
            <div id="c-cont">
                <div id="first">
                    <p>Saber como anunciar no Google é fundamental para vender na internet, hoje existe 2 formas de seu site aparecer no Google:</p>
    
                    <p><strong>Anúncios gratuitos (Busca Orgânica)</strong><br>
                    "Resultados em longo prazo"</p>
                    
                    <p><strong>Anúncios Pagos (Google Adwords)</strong></br>
                    "Resultados imediatos"</p>
                    
                    <p>Nos 2 casos é fundamental implementar melhorias técnicas no seu site, pesquisar a concorrência, as palavras mais buscadas no seu ramo de atuação entre outras coisas.</p>
                    
                    <p>Fale com um consultor e descubra como anunciar no Google, os custos, as vantagens e desvantagens de anunciar.</p>
                    
                    <iframe width="500" height="281" src="https://www.youtube.com/embed/p0ve69hT1xk" frameborder="0" gesture="media" allowfullscreen></iframe>
                </div>
                <div>
                    <img src="resources/como-anunciar.jpg" alt="anúncio no google">
                    <p><strong>Como funciona um anúncio no Google?</strong></p>
    
                    <p>Basta escrever o seu anúncio, escolher os termos de pesquisa que descrevem os seus produtos ou serviços e, em seguida, definir um orçamento. Quando potenciais clientes pesquisam o que a sua loja disponibiliza, há muito mais chances de verem o seu anúncio.</p>
                    
                    <p><strong>Pague apenas pelos resultados</strong></p>
                    
                    <p>Você só paga quando alguém realmente clica no seu anúncio para obter mais informações. Basta definir um orçamento com o qual se sinta confortável e ajustá-lo à medida que começar a ver resultados.</p>
                </div>
                <div id="funciona">
                    <p><strong>1. As pessoas pesquisam no Google</strong></p>
                    <p>As pessoas usam palavras-chave (ou termos de pesquisa) para pesquisar produtos e serviços específicos.</p>
                    <img src="resources/google1.jpg" alt="caixa de pesquisa do google">
                    
                    <p><strong>2. Elas visualizam seu anúncio</strong></p>
                    <p>Se as palavras-chave que você escolheu corresponderem ao que as pessoas estiverem pesquisando, seu anúncio será exibido ao lado ou acima dos resultados de pesquisa do Google.</p>
                    <img src="resources/google2.jpg" alt="resultado de pesquisa no google">
                    
                    <p><strong>3. Você conquista mais clientes</p></strong>
                    <p>Quando as pessoas clicarem em seu anúncio, elas irão para seu website para saber mais ou comprar.</p>
                    <img src="resources/google3.jpg" alt="exemplo de site">
                </div>
                <div>
                    <p>O Google AdWords é diferente das formas tradicionais de publicidade. Ele não contém listas de preços ou de taxas. Em vez disso, nosso modelo padrão de sistema de preços conta com um leilão com base em custo por clique (CPC):</p>

                    <p><strong>Você decide quanto quer investir</strong></p>
                    
                    <p>Você escolhe um orçamento diário com o qual esteja confortável e depois pode alterá-lo a qualquer momento. Não há um gasto mínimo, e você não fica preso a um contrato.</p>
                    
                    <p><strong>Pague apenas pelos resultados</strong></p>
                    
                    <p>Com anúncios no Google, você não será cobrado quando um anúncio for exibido, e sim somente quando alguém clicar no anúncio para acessar seu website. Em outras palavras, você pagará somente quando sua publicidade funcionar.</p>
                    
                    <p><strong>Você tem o controle de seu custo por clique</strong></p>
                    
                    <p>Definimos os preços do custo por clique por meio de um sistema de leilão automatizado. Como um anunciante, você especifica o valor máximo (lance máximo de CPC) que deseja pagar por um cliente em potencial que acessa seu website clicando em seu anúncio. Esse lance determina a posição em que o anúncio será exibido na página de resultados de pesquisa, o que, consequentemente, determina a frequência com que as pessoas visualizam e clicam no anúncio.</p>
                    
                    <span>
                        <p>Veja um exemplo rápido:</p>

                        <p>Seu orçamento diário: R$ 10,00<br>
                        
                        Seu lance máximo de custo por clique: R$ 0,50<br>
                        
                        Seu custo médio por clique real: R$ 0,40<br>
                        
                        Número aproximado de cliques por dia: 25</p>
                    </span>
                </div>
            </div>
            <script type="text/javascript">
                function mostrar(x){
                    var i;
                    for(i = 0; i <= 2; i++){
                        document.getElementById("c-cont").getElementsByTagName("div")[i].style.display = "none";
                    }
                    document.getElementById("c-cont").getElementsByTagName("div")[x].style.display = "block";
                }
            </script>
        </main>
        <?php
            include("footer.php");
        ?>
    </body>
</html>
