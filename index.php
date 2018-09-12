<?php get_header();?>

<div class="submenu-nav hide-on-med-and-up">
    <div class="container">
        <div class="row">
            <div class="col s4">
                <a class="active" href="<?php echo home_url('/');?>">
                    Destaques
                </a>
            </div>
            <div class="col s4">
                <a href="<?php echo home_url('/');?>mais-lidas">
                    Mais Lidas
                </a>
            </div>
            <div class="col s4">
                <a href="<?php echo home_url('/');?>colunas">
                    Colunas
                </a>
            </div>
        </div>
    </div>
</div>
<br/>

<div class="container">
    <div class="row hide-on-med-and-down">
        <div class="col s12 m1 l1"></div>
        <div class="col s12 m10 l10">
            <?php
                require 'slide.php';
            ?>
        </div>
        <div class="col s12 m1 l1"></div>
    </div>
    <?php
        require 'principal.php';
        require 'mais-destaques.php';
    ?>
</div>

<div class="container">
    <div class="row center">
        <div class="col s12 m12 l12">
            <div class="title-publicidad hide-on-med-and-down">
                Publicidade
            </div>
            <div class="hide-on-med-and-down">
                <!-- Novo Bloco Home GG -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:970px;height:250px"
                     data-ad-client="ca-pub-9443599461482101"
                     data-ad-slot="5738708114"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <div class="hide-on-med-and-up">
                <div class="title-publicidade">
                    Publicidade
                </div>
                <div data-premium data-adunit="CEARA_NEWS_MOBILE_HOME_2" data-sizes="[[300,250]]" data-device="mobile">
                </div>
                <br/>
                <div class="line"></div>
                <br/>
                <div class="title-publicidade">
                    Publicidade
                </div>
                <div class="slide-mobile">
                    <a href="https://www.maracanau.ce.gov.br/" target="_blank">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pub/upa-maracanau-01.png">
                    </a>
                </div>
                <div class="line"></div>
                <br/>
            </div>
        </div>
    </div>
</div>

<div class="row"></div>

<div class="container hide-on-med-and-down">
    <?php
        require 'colunas.php';
    ?>
</div>

<div class="row hide-on-med-and-down"></div>

<div class="container">
    <div class="row">
        <div class="col m3 l3 hide-on-med-and-down ">
            <div class="title-publicidade center">
                Publicidade
            </div>
            <div class="pub-politica center">
                <!-- single -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:160px;height:600px"
                     data-ad-client="ca-pub-9443599461482101"
                     data-ad-slot="2554252069"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
        <div class="col m9 l9">
            <?php
                require 'politica.php';
                require 'policia.php';
            ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col s12 m3 l3">
            <div class="row">
                <div class="col s3 m4 l4">
                    <div class="cariri">
                        Cariri
                    </div>
                </div>
                <div class="col s9 m8 l8">
                    <div class="border-cariri"></div>
                </div>
                <div class="col s12">
                    <a href="https://issuu.com/cearanews7/docs/jc-11a17setembro2018" target="_blank">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jornal.jpg"/>
                    </a>
                    <div class="line"></div>
                    <br/>
                    <div class="anuncio hide-on-med-and-down">
                        <!-- Anúncio Cariri -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m9 l9">
            <?php
                require 'justica.php';
            ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col s12 m1 l1"></div>
        <div class="col s12 m10 l10 ajuste-interior-esporte">
            <div class="pub-top hide-on-med-and-down">
                <div class="title-publicidade center">
                    Publicidade
                </div>
                <?php
                require 'slide2.php';
                ?>
            </div>
            <div class="hide-on-med-and-up ajuste-line-tuto">
                <div class="title-publicidade center">
                    Publicidade
                </div>
                <div data-premium data-adunit="CEARA_NEWS_MOBILE_HOME_3" data-sizes="[[300,250]]" data-device="mobile">
                </div>
                <div class="line"></div>
                <br/>
            </div>
        </div>
        <div class="col s12 m1 l1"></div>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php
            require 'interior-esporte.php';
        ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col s12 m1 l1"></div>
        <div class="col s12 m10 l10 ajuste-tudo">
            <div class="pub-top hide-on-med-and-down">
                <div class="title-publicidade center">
                    Publicidade
                </div>
                <div data-premium data-adunit="CEARA_NEWS_DESKTOP_HOME_4" data-sizes="[[728,90]]" data-device="desktop">
                </div>
            </div>
            <div class="hide-on-med-and-up">
                <div class="title-publicidade center">
                    Publicidade
                </div>
                <div data-premium data-adunit="CEARA_NEWS_MOBILE_HOME_4" data-sizes="[[300,250]]" data-device="mobile">
                </div>
                <div class="line"></div>
                <br/>
            </div>
        </div>
        <div class="col s12 m1 l1"></div>
    </div>
</div>

<div class="container">
    <?php
        require 'tudo.php';
    ?>
</div>

<?php get_footer();?>
