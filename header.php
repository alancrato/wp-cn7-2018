<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Ceará News 7 - Sete dias por semana sem medo da notícia!</title>
    <meta name="description" content="Últimas notícias de política, economia, polícia do Ceará e Brasil"/>
    <meta name="keywords" content="Política, política no Ceará, bastidores da política no Ceará, polícia no Ceará, bastidores da polícia no Ceará, Donizete Arruda, Cid Gomes, Ciro Gomes, Ivo Gomes, Ferreira Gomes, FGs, FG, facções criminosas, GDE, CV, Guardiões do Estado, Comando Vermelho, FDN, Família do Norte, vídeos de polícia, homicidômetro, assassinatos no Ceará, homicídios no Ceará, rebeliões, motins, fofocas, bizarro, Ceará, Fortaleza, Juazeiro Norte, Sobral, Caucaia, Maracanaú, Iguatu, Quixadá, Pacajus, Maranguape, Alto Santo, Cariri, Ceará News, Que tiro foi esse, Assembleia Legislativa do Ceará, Câmara de Vereadores de Fortaleza, OAB, OAB Ceará, saúde, educação, deputados estaduais do Ceará, deputados federais do Ceará, bancada do Ceará, insegurança no Ceará, caos da Segurança no Ceará, André Costa, secretário André Costa, Fernando Ribeiro, Camilo Santana, Roberto Cláudio, governador do Ceará, Expresso 150, Judiciário no Ceará, Ministério Público, Eleições 2018"/>

    <!-- CSS & FONTS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Lora|Open+Sans+Condensed:300i|Cuprum:400i|Lato:100i|Roboto:300i,400|Yanone+Kaffeesatz:300" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome.min.css">

    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.png" sizes="32x32"/>

    <!--Analytcs-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-68631515-1', 'auto');
        ga('send', 'pageview');

    </script>

    <?php wp_head(); ?>
</head>
<body>
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <div class="text-top">
                    Sete dias da semana sem medo da notícia
                </div>
            </div>
            <div class="col s12 m6 hide-on-med-and-down">
                <div class="row right social-top">
                    <div class="col s12 m3 l3 facebook">
                        <a href="javascript:void(null)">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social/facebook.png"/>
                        </a>
                    </div>
                    <div class="col s12 m3 l3">
                        <a href="javascript:void(null)">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social/instagram.png"/>
                        </a>
                    </div>
                    <div class="col s12 m3 l3">
                        <a href="javascript:void(null)">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social/whatsapp.png"/>
                        </a>
                    </div>
                    <div class="col s12 m3 l3">
                        <a href="javascript:void(null)">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social/twitter.png"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="black" role="navigation">
    <div class="nav-wrapper container">

        <div class="row hide-on-med-and-down">
            <div class="col s12 m2 l2">
                <a href="<?php echo home_url('/');?>" class="brand-logo">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png"/>
                </a>
            </div>
            <div class="col s12 m7 l7">
                <!-- Dropdown Structure -->
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="<?php echo home_url('/');?>category/politica">Política</a></li>
                    <li><a href="<?php echo home_url('/');?>category/policia">Polícia</a></li>
                    <li><a href="<?php echo home_url('/');?>category/interior">Interior</a></li>
                    <li><a href="<?php echo home_url('/');?>category/esportes">Esportes</a></li>
                    <li><a href="<?php echo home_url('/');?>category/tudo">De Tudo</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo home_url('/');?>category/justica">Observatório Justiça</a></li>
                    <li><a href="<?php echo home_url('/');?>category/mais-que-coisa">Mais Que Coisa</a></li>
                </ul>
                <ul class="center">
                    <li><a class="active" href="<?php echo home_url('/');?>">Destaques</a></li>
                    <li>
                        <a class="dropdown-trigger" href="javascript:void(null)" data-target="dropdown1">Editorias <i class="material-icons right">arrow_drop_down</i></a>
                    </li>
                    <li><a href="<?php echo home_url('/');?>ultimas">Últimas</a></li>
                    <li><a href="<?php echo home_url('/');?>mais-lidas">Mais Lidas</a></li>
                    <li><a href="javascript:void(null)">Contato</a></li>
                    <li><a href="http://www.jornaldocariri.com.br" target="_blank">Jornal do Cariri</a></li>
                    <li><a href="http://www.plusfm.com.br" target="_blank">Plus Fm</a></li>
                </ul>
            </div>
            <div class="col s12 m3 l3">
                <nav class="black nav-search">
                    <div class="nav-wrapper">
                        <form>
                            <div class="input-field">
                                <input id="search" type="search" placeholder="PESQUISAR" required>
                                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row hide-on-med-and-up">
            <div class="col s4">
                <a href="javascript:void(null)" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
            <div class="col s4">
                <a href="<?php echo home_url('/');?>" class="brand-logo">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png"/>
                </a>
            </div>
            <div class="col s4">
                <i class="material-icons right search">search</i>
            </div>
        </div>

        <ul id="nav-mobile" class="sidenav">
            <li>
                <div class="user-view-cap">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-menu.png"/>
                </div>
            </li>
            <li><a href="<?php echo home_url('/');?>ultimas">Últimas Notícias</a></li>
            <li><a href="<?php echo home_url('/');?>">Destaques</a></li>
            <li><a href="<?php echo home_url('/');?>mais-lidas">Mais Lidas</a></li>
            <li><a href="<?php echo home_url('/');?>colunas">Colunas</a></li>
            <li><a href="<?php echo home_url('/');?>category/politica">Política</a></li>
            <li><a href="<?php echo home_url('/');?>category/policia">Polícia</a></li>
            <li><a href="<?php echo home_url('/');?>category/interior">Interior</a></li>
            <li><a href="<?php echo home_url('/');?>category/esportes">Esportes</a></li>
            <li><a href="<?php echo home_url('/');?>category/tudo">De Tudo</a></li>
            <li><a href="<?php echo home_url('/');?>category/justica">Observatório Justiça</a></li>
        </ul>
    </div>
</nav>