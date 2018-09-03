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
            <div class="slide-topo">
                <a href="javascript:void(null)">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pub/bnb.gif"/>
                </a>
            </div>
        </div>
        <div class="col s12 m1 l1"></div>
    </div>
    <?php
        require 'principal.php';
        require 'mais-destaques.php';
    ?>
</div>

<div class="container">
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="pub-center hide-on-med-and-down"></div>
            <div class="hide-on-med-and-up">
                <div class="title-publicidade">
                    Publicidade
                </div>
                <div class="pub-top"></div>
                <br/>
                <div class="line"></div>
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
        <div class="col s12 m3 l3">
            <div class="title-publicidade">
                Publicidade
            </div>
            <div class="pub-politica hide-on-med-and-down"></div>
            <br/>
            <div class="publicidade-quadrada-politica"></div>
            <br/>
            <div class="line"></div>
        </div>
        <div class="col s12 m9 l9">
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
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jc.png"/>
                    <div class="line"></div>
                    <br/>
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
        <?php
        require 'interior-esporte.php';
        ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col s12 m1 l1"></div>
        <div class="col s12 m10 l10">
            <div class="pub-top"></div>
            <div class="hide-on-med-and-up ajuste-line-tuto">
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
