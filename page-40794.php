<?php get_header();?>

<div class="submenu-nav hide-on-med-and-up">
    <div class="container">
        <div class="row">
            <div class="col s4">
                <a href="<?php echo home_url('/');?>">
                    Destaques
                </a>
            </div>
            <div class="col s4">
                <a class="active" href="<?php echo home_url('/');?>mais-lidas">
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

<br/>
<div class="container">

    <div class="row hide-on-med-and-down">
        <div class="col s12 m1 l1"></div>
        <div class="col s12 m10 l10">
            <div class="pub-top"></div>
        </div>
        <div class="col s12 m1 l1"></div>
    </div>
</div>

<div class="container ajuste-mais-lidas-container">
    <div class="row float-category">

    </div>
    <div class="row float-category">
        <div class="col s12 m8 l8">

            <?php
            $args = array(
                'range' => 'last24hours',
                'limit' => 10
            );
            ?>

            <div class="row">
                <div class="col s2">
                    <div class="date-single">
                        <?php
                        for($i = 1; $i <= 10; $i++){
                            $result = $i;
                            echo "<h3 class='number title-mais-lidas-mobile-number'>$result</h3>";
                        }
                        ?>
                    </div>
                </div>
                <div class="col s10">
                    <div class="title-mais-lidas-mobile padding-ajustes">
                        <?php
                        wpp_get_mostpopular( $args );
                        ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="col s12 m4 l4">
            <div class="title-publicidade center">
                Publicidade
            </div>
            <!-- Bloco 01 Premmium -->
            <div data-premium data-adunit="CEARA_NEWS_DESKTOP_INTERNA_LATERAL_2" data-sizes="[[300,600]]" data-device="desktop">
            </div>
            <div data-premium data-adunit="CEARA_NEWS_MOBILE_HOME_3" data-sizes="[[300,250]]" data-device="mobile">
            </div>
            <br/>
            <div class="line-sidebar-category"></div>
            <br/>
            <div class="facebook-page center hide-on-med-and-down">
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1&appId=1719551754798065&autoLogAppEvents=1';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
                <div class="fb-page" data-href="https://www.facebook.com/cearanews7/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cearanews7/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cearanews7/">Ceará News 7</a></blockquote></div>
            </div>
            <br/>
            <div class="line-sidebar-category hide-on-med-and-down"></div>
        </div>
    </div>
</div>

<?php get_footer();?>

