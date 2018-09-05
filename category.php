<?php get_header();?>

    <br/>
    <div class="container">
        <div class="row hide-on-med-and-down">
            <div class="col s12 m1 l1"></div>
            <div class="col s12 m10 l10">
                <div class="pub-top">
                    <div data-premium data-adunit="CEARA_NEWS_DESKTOP_HOME_3" data-sizes="[[728,90]]" data-device="desktop">
                    </div>
                </div>
            </div>
            <div class="col s12 m1 l1"></div>
        </div>
    </div>

<?php
    $categories = get_the_category();
    $result = $categories[0]->term_id;

    $cat = array(
       'donizete-arruda' => 13,
       'fernando-ribeiro' => 15,
       'pastor-jecer-goes' => 39,
       'madson-vagner' => 44,
       'raphael-barros' => 16,
       'roberto-pires' => 40,
    );

    if(in_array($result,$cat)){
?>

    <div class="container">
        <div class="row">

            <div class="col s12 m2 l2 center">
                <div class="ajuste-colunista">

                    <?php
                        if($result == 13){
                    ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_01@2x.png"/>
                        <div class="btn-small ajuste-title-colunista">
                            Donizete Arruda
                        </div>
                        <div class="title-coluna">
                            Jornalista
                        </div>
                    <?php
                        }
                    ?>

                    <?php
                    if($result == 15){
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_02@2x.png"/>
                        <div class="btn-small ajuste-title-colunista">
                            Fernando Ribeiro
                        </div>
                        <div class="title-coluna">
                            Jornalista cearense, blogueiro, comentarista, colunista, especialista em segurança pública, atua no jornalismo policial realizando a cobertura do dia a dia da violência e da criminalidade no estado do ceará, com matérias amplas de fatos do cotidiano e reportagens especiais abrangendo também o judiciário local.
                        </div>
                        <?php
                    }
                    ?>

                    <?php
                    if($result == 39){
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_03@2x.png"/>
                        <div class="btn-small">
                            Pastor Jecer
                        </div>
                        <div class="title-coluna">
                           Colunista
                        </div>
                        <?php
                    }
                    ?>

                    <?php
                    if($result == 44){
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_04@2x.png"/>
                        <div class="btn-small">
                            Madson Vagner
                        </div>
                        <div class="title-coluna">
                            Jornalista, colunista e escritor
                        </div>
                        <?php
                    }
                    ?>

                    <?php
                    if($result == 16){
                        ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_05@2x.png"/>
                        <div class="btn-small">
                            Raphael Barros
                        </div>
                        <div class="title-coluna">
                            Colunista
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                        if($result == 40){
                            ?>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_06@2x.png"/>
                            <div class="btn-small">
                                Roberto Pires
                            </div>
                            <div class="title-coluna">
                                Colunista
                            </div>
                            <?php
                        }
                    ?>

                </div>
            </div>
            <div class="col s12 m7 l7">

        <?php
         if(have_posts()):
            while(have_posts()): the_post();
                ?>
                <div class="title-categoria-coluna center ajuste-padding-coluna">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </div>

                <div class="content-single">
                    <?php the_content(); ?>
                </div>

                <div class="row">
                    <div class="col s12 m3 l3">
                    </div>
                    <div class="col s6 m3 l3">
                        <div class="time-date img-date-coluna">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social/single/time.png"/>
                        </div>
                        <div class="date-single">
                            <?php the_time('d/m G:i'); ?>
                        </div>
                    </div>
                    <div class="col s6 m3 l3">
                        <div class="row right ajuste-img-coluna ajuste-img-social-mobile">
                            <div class="col s4 facebook-coluna">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social/single/facebook.png"/>
                            </div>
                            <div class="col s4">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social/single/whatsapp.png"/>
                            </div>
                            <div class="col s4">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social/single/twitter.png"/>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3 l3">
                    </div>
                </div>

                <div class="line-category"></div>
                <br/>

                <?php
                    endwhile;
                else:
                    echo '';
                endif;
                ?>
                <div class="center">
                    <?php wordpress_pagination(); ?>
                </div>

            </div>
            <div class="col s12 m3 l3">
                <div class="ajuste-padding-coluna">
                    <div class="title-publicidade center">
                        Publicidade
                    </div>
                    <div data-premium data-adunit="CEARA_NEWS_DESKTOP_HOME_2" data-sizes="[[300,250]]" data-device="desktop">
                    </div>
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
    </div>

<?php
    }else{
?>
    <div class="container">
        <div class="row float-category">
            <div class="col s12">
                <div class="description-category">
                    <?php single_cat_title();?>
                </div>
            </div>
        </div>
        <div class="row float-category">
            <div class="col s12 m8 l8">
                <?php
                if(have_posts()):
                    while(have_posts()): the_post();
                        ?>
                        <div class="row category">
                            <div class="col s12 m4 l4">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('custom-size');
                                    }
                                    ?>
                                </a>
                            </div>
                            <div class="col s12 m8 l8">
                                <div class="time-date-category time-date-category">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social/single/time.png"/>
                                </div>
                                <div class="date-single">
                                    <?php the_time('d/m G:i'); ?>
                                </div>
                                <div class="title-category padding-ajustes">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </div>
                                <div class="bigode-category">
                                    <?php
                                    $bigode = get_field( "bigode" );
                                    if( $bigode ){
                                        echo $bigode;
                                    }else{
                                        echo ' ';
                                    }
                                    ?>
                                </div>
                                <br/>
                                <div class="line-category"></div>
                                <br/>
                            </div>
                        </div>
                        <?php
                    endwhile;
                else:
                    echo '';
                endif;
                ?>
                <div class="center">
                    <?php wordpress_pagination(); ?>
                </div>

            </div>
            <div class="col s12 m4 l4">
                <div class="title-publicidade center">
                    Publicidade
                </div>
                <!-- Bloco 01 Premmium -->
                <div data-premium data-adunit="CEARA_NEWS_DESKTOP_INTERNA_LATERAL_2" data-sizes="[[300,600]]" data-device="desktop">
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
                <br/>
            </div>
        </div>
    </div>

<?php
    }
?>
<?php get_footer();?>