<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Life-hacking dicas blog">
    <title>Sua vida mais fácil</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
    <link rel="shortcut icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="css/material.min.css" />
    <link rel="stylesheet" href="css/mycss.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

    <script src="jquery/jquery.min.js"></script>
    <script src="mdl/material.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/validacao.js"></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

    <!-- facebook commentários-->
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=245558825499694";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- facebook -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!--Analytics-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-106963166-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>

<body>

    <!-- App bar superior -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header header-color">
            <div class="mdl-layout__header-row header-color">
                <!-- Espaço pra empurrar os links p/ a direita -->
                <div class="mdl-layout-spacer"></div>
                <!-- Itens do menu superior, para telas maiores -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="">Auto</a>
                    <a class="mdl-navigation__link" href="">Pet</a>
                    <a class="mdl-navigation__link" href="">Gadget</a>
                    <a class="mdl-navigation__link" href="">Sua vida</a>
                </nav>
            </div>

        </header>

         <!--Menu hamburger-->
        <div class="mdl-layout__drawer hamburger-menu">
            <span class="mdl-layout-title">Menu</span>
            <nav class="mdl-navigation ">
                <a class="mdl-navigation__link" href="">Auto</a>
                <a class="mdl-navigation__link" href="">Pet</a>
                <a class="mdl-navigation__link" href="">Gadget</a>
                <a class="mdl-navigation__link" href="">Sua vida</a>
            </nav>
        </div>

        <!-- Container do layout -->
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Logo e nome-->
                <div align="center">
                    <div class="card-painel" >
                        <img src="img/fav-icon.png" width="45" height="43" border="0"
                             alt="" >
                        <img class="nome-logo" src="img/nome.png" width="215" height="25" border="0"
                             alt="" style="margin-left: 10px">
                    </div>
                </div>

                <!-- Container dos grids -->
                <div class="mdl-grid">

                    <!-- Célula de grid da postagem #9 -->
                    <div class="mdl-cell mdl-cell--4-col inner">
                        <!-- Card da postagem #9 -->
                        <div class="mdl-card mdl-card-home mdl-shadow--4dp mdl-grid-align">
                            <a href="post9/comida-natural-vs-industrializada.html" >
                                <div class="mdl-card__media">
                                    <img src="img/comida-natural-vs-industrializada.jpg" style='height: 100%; width: 100%; object-fit: contain' border="0"
                                         alt="" >
                                </div>
                                <div class="mdl-card__supporting-text" style="color: #212121">
                                    <h5 class="titulo-card" data-toggle="collapse" data-target="#post1">Comida Natural vs. Industrializada, qual é melhor para o seu cão?</h5>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <p class="texto-card" id="post-body" >
                                        Parece que hoje está na moda a alimentação natural para cães, muitos donos se
                                        preocupam com a qualidade alimentar de seus cães, o que gera muita duvida no
                                        quesito qual tipo de dieta é mais recomendada...
                                    </p>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a href="post9/comida-natural-vs-industrializada.html" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        Saiba mais
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Célula de grid da postagem #8 -->
                    <div class="mdl-cell mdl-cell--4-col inner">
                        <!-- Card da postagem #8 -->
                        <div class="mdl-card mdl-card-home mdl-shadow--4dp mdl-grid-align">
                            <a href="post8/crm-gestao-de-clientes.html" >
                                <div class="mdl-card__media">
                                    <img src="img/crm-gestao-de-clientes.jpg" style='height: 100%; width: 100%; object-fit: contain' border="0"
                                         alt="" >
                                </div>
                                <div class="mdl-card__supporting-text" style="color: #212121">
                                    <h5 class="titulo-card" data-toggle="collapse" data-target="#post1">CRM - Gestão de clientes</h5>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <p class="texto-card" id="post-body" >
                                        Já parou para se perguntar “como ganhar mais clientes sem perder os que já tenho”?
                                        Essa é uma questão que é abordada desde em reuniões semestrais de grandes multinacionais até em
                                        conversas de corredor de pequenas empresas...
                                    </p>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a href="post8/crm-gestao-de-clientes.html" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        Saiba mais
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Célula de grid da postagem #7 -->
                    <div class="mdl-cell mdl-cell--4-col inner">
                        <!-- Card da postagem #7 -->
                        <div class="mdl-card mdl-card-home mdl-shadow--4dp mdl-grid-align">
                            <a href="post7/corretor-como-vender-melhor.html" >
                                <div class="mdl-card__media">
                                    <img src="img/corretor-como-vender-melhor.jpg" style='height: 100%; width: 100%; object-fit: contain' border="0"
                                         alt="" >
                                </div>
                                <div class="mdl-card__supporting-text" style="color: #212121">
                                    <h5 class="titulo-card" data-toggle="collapse" data-target="#post1">Corretor: como vender melhor</h5>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <p class="texto-card" id="post-body" >Foi-se o tempo onde uma carteira de clientes era algo simples de manter. Onde o
                                        relacionamento entre vendedor e cliente era algo duradouro.
                                    </p>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a href="post1/3-apps-que-vao-mudar-a-sua-vida-para-melhor.html" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        Saiba mais
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Célula de grid da postagem #6 -->
                    <div class="mdl-cell mdl-cell--4-col inner">
                        <!-- Card da postagem #6 -->
                        <div class="mdl-card mdl-card-home mdl-shadow--4dp mdl-grid-align">
                            <a href="post6/descubra-o-seu-perfil-de-dono-de-cao.html">
                                <div class="mdl-card__media">
                                    <img src="img/descubra-o-seu-perfil-de-dono-de-cao.jpg" style='height: 100%; width: 100%; object-fit: contain' border="0"
                                         alt="" >
                                </div>

                                <div class="mdl-card__supporting-text" style="color: #212121">
                                    <h5 class="titulo-card" data-toggle="collapse" data-target="#post1">Quiz - Descubra o seu perfil de dono de cão</h5>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <p class="texto-card" id="post-body" >Em algum momento, nós vamos pensar sobre a personalidade ou as características que o nosso pet tem,
                                        seja ele bagunceiro, teimoso, chato, brincalhão ou preguiçoso. Além disso...
                                    </p>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        Saiba mais
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Célula de grid da postagem #5 -->
                    <div class="mdl-cell mdl-cell--4-col inner">
                        <!-- Card da postagem #5 -->
                        <div class="mdl-card mdl-card-home mdl-shadow--4dp mdl-grid-align">
                            <a href="post5/como-economizar-tempo-e-dinheiro-com-seu-automovel.html">
                                <div class="mdl-card__media">
                                    <img src="img/como-economizar-tempo-e-dinheiro-com-seu-automovel.jpeg" style='height: 100%; width: 100%; object-fit: contain' border="0"
                                         alt="" >
                                </div>

                                <div class="mdl-card__supporting-text" style="color: #212121">
                                    <h5 class="titulo-card" data-toggle="collapse" data-target="#post1">Como economizar tempo e dinheiro com o seu automovel</h5>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <p class="texto-card" id="post-body" > Os tempos estão mudando e muita coisa que antes era fato, hoje não passa de uma simples lembrança,
                                        isso é um fato! Mas uma coisa que sem dúvida ainda é verdade, é que o brasileiro não deixou de ser apaixonado por carro!
                                        Segundo o IBGE...
                                    </p>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        Saiba mais
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Célula de grid da postagem #4 -->
                    <div class="mdl-cell mdl-cell--4-col">
                        <!-- Card da postagem #4 -->
                        <div class="mdl-card mdl-card-home mdl-shadow--4dp mdl-grid-align">
                            <a href="post4/a-check-list-perfeita-para-fazer-uma-road-trip-sem-stress.html">
                                <div class="mdl-card__media">
                                    <img src="img/a-check-list-perfeita-para-fazer-uma-road-trip-sem-stress.jpg" style='height: 100%; width: 100%; object-fit: contain' border="0"
                                         alt="" >
                                </div>

                                <div class="mdl-card__supporting-text" style="color: #212121">
                                    <h5 class="titulo-card" data-toggle="collapse" data-target="#post1">A check-list perfeita para fazer uma road trip sem stress</h5>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <p class="texto-card" id="post-body" >E aquele dia tão desejado ta chegando? Você tem mesmo certeza que ta tudo certo?
                                        Ainda não sabe do que eu estou falando, não é?
                                        Eu to falando daquela ROAD TRIP que você tem sonhado há muito tempo. E agora, meu amigo, ela vai sair do papel.
                                        Aqui vão algumas dicas para você se planejar melhor.
                                    </p>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        Saiba mais
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Célula de grid da postagem #3 -->
                    <div class="mdl-cell mdl-cell--4-col">
                        <!-- Card da postagem #3 -->
                        <div class="mdl-card mdl-card-home mdl-shadow--4dp mdl-grid-align">
                            <a href="post3/25-bares-e-restaurantes-pet-friendly.html">
                                <div class="mdl-card__media">
                                    <img src="img/25-lugares-pet-friendly.jpg" style='height: 100%; width: 100%; object-fit: contain' border="0"
                                         alt="" >
                                </div>

                                <div class="mdl-card__supporting-text" style="color: #212121">
                                    <h5 class="titulo-card" data-toggle="collapse" data-target="#post1">25 bares e restaurantes pet friendly</h5>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <p class="texto-card" id="post-body" >Cachorros têm apenas um defeito: vivem pouco. Vamos aproveitar ao máximo esse tempo e ficar grudado neles!
                                        E que atire o primeiro biscrok quem tem um bichinho e nunca ficou com o coração na mão ao ver a carinha
                                        de triste quando...
                                    </p>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        Saiba mais
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Célula de grid da postagem #2 -->
                    <div class="mdl-cell mdl-cell--4-col">
                        <!-- Card da postagem #2 -->
                        <div class="mdl-card mdl-card-home mdl-shadow--4dp mdl-grid-align">
                            <a href="post2/15-mitos-e-verdades-sobre-a-bateria-do-seu-celular.html">
                                <div class="mdl-card__media">
                                    <img src="img/15-mitos-e-verdades-sobre-a-bateria-do-seu-celular.jpeg" style='height: 100%; width: 100%; object-fit: contain' border="0"
                                         alt="" >
                                </div>

                                <div class="mdl-card__supporting-text" style="color: #212121">
                                    <h5 class="titulo-card" data-toggle="collapse" data-target="#post1">15 verdades e mitos sobre a bateria do seu celular</h5>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <p class="texto-card" id="post-body" >Hoje em dia a maioria das pessoas são companheiras inseparáveis de seus celulares,
                                        mas você sabe tudo mesmo sobre seu fiel companheiro?
                                        Claro que nem todo mundo sabe que todas as...
                                    </p>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        Saiba mais
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Célula de grid da postagem #1 -->
                    <div class="mdl-cell mdl-cell--4-col">
                        <!-- Card da postagem #1 -->
                        <div class="mdl-card mdl-card-home mdl-shadow--4dp mdl-grid-align">
                            <a href="post1/3-apps-que-vao-mudar-a-sua-vida-para-melhor.html">
                                <div class="mdl-card__media">
                                    <img src="img/3-apps-que-vao-mudar-a-sua-vida.jpeg" style='height: 100%; width: 100%; object-fit: contain' border="0"
                                         alt="" >
                                </div>
                                <div class="mdl-card__supporting-text" style="color: #212121">
                                    <h5 class="titulo-card"  data-toggle="collapse" data-target="#post1">3 Apps que vão mudar a sua vida!</h5>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <p class="texto-card" id="post-body" >Chega de tentar fingir que o celular não é uma extensão do nosso corpo.
                                        Ao invés de lutar contra isso é hora de aproveitar o que eles...
                                    </p>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        Saiba mais
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Final do grid -->

                <!-- Formulário de cadastro-->
                <div align="center">
                    <div class="card-painel" >
                        <h4 class="titulo-card" data-toggle="collapse" data-target="#post1">
                            Facilite ainda mais a sua vida!
                        </h4>
                        <h6 class="titulo-card" data-toggle="collapse" data-target="#post1">
                            Baixe o nosso e-book grátis com dicas surpreendentes
                        </h6>
                    </div>
                    <div class="card-painel" >
                        <form id="formCadastro" method="POST" action="insert.php">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="nome-footer" name="nome-footer" required>
                                <label class="mdl-textfield__label" for="nome-footer">Nome completo</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="email" id="email-footer" name="email-footer" required>
                                <label class="mdl-textfield__label" for="email-footer">e-mail</label>
                            </div>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent button-footer">
                                Quero meu e-book grátis
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Facebook - Comentários -->
                <div align="center" id="conteudo">
                    <section id="post">
                        <div class="col-auto button-footer facebook-div-comentario">
                            <div class="fb-comments facebook-comentarios" data-href="http://www.suavidamaisfacil.com.br/index.php" data-mobile="true" data-width="100%" data-colorscheme="dark" data-numposts="10"></div>
                        </div>
                    </section>
                </div>

                <!-- Rodapé-->
                <footer class="mdl-mini-footer">
                    <div class="mdl-mini-footer__left-section">
                        <div class="mdl-logo">Sua vida mais fácil</div>
                        <ul class="mdl-mini-footer__link-list">
                            <li><a target="_blank" href="https://www.facebook.com/suavidamaisfacil"> <img src="img/facebook.svg" width="30" height="30" border="0" alt="" ></a></li>
                        </ul>
                        <div class="mdl-layout-spacer"></div>
                    </div>
                </footer>

            </div>
        </main>

        <!--hidden para inclusão no banco-->
        <div>
            <input type="text" id="nome-db" name="nome-db" required>
            <input type="email" id="email-db" name="email-db" required>
        </div>
    </div>

</body>
</html>