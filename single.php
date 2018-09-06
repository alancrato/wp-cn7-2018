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

<div class="container">
    <div class="row">
    <?php
        if (have_posts()): the_post();
    ?>
        <div class="col s12 m1 l1"></div>
        <div class="col s12 m10 l10">

            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="title-single">
                        <?php single_post_title(); ?>
                    </div>
                </div>
                <div class="col s12 m12 l12">
                    <div class="subtitle-single">
                        <?php
                            $bigode = get_field( "bigode" );
                            if( $bigode ){
                                echo $bigode;
                            }else{
                                echo ' ';
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m8 l8">

                    <div class="img-single">
                        <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('custom-size');
                            }
                        ?>
                    </div>
                    <?php
                        if(get_post(get_post_thumbnail_id())->post_excerpt){
                            echo "<blockquote>";
                                echo get_post(get_post_thumbnail_id())->post_excerpt;
                            echo "</blockquote>";
                                echo "<div class=\"line\"></div>";
                        }
                    ?>

                    <?php
                        if (get_field("autor")){
                    ?>
                        <div class="autor-date-social">
                            <div class="row">
                                <div class="col s12 m4 l4">
                                    <div class="autor-title">
                                        <?php
                                        $value = get_field( "autor" );
                                        if( $value ){
                                            echo 'Por: '.$value;
                                        }else{
                                            echo ' ';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col s6 m3 l3">
                                    <div class="time-date">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social/single/time.png"/>
                                    </div>
                                    <div class="date-single">
                                        <?php the_time('d/m G:i'); ?>
                                    </div>
                                </div>
                                <div class="col s6 m5 l5">
                                    <div class="row right ajuste-img-social-mobile">
                                        <div class="col s4 facebook-single">
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
                            </div>
                        </div>
                    <?php
                    ?>

                    <?php
                        }else{
                    ?>
                        <div class="autor-date-social">
                            <div class="row">
                                <div class="col s6 m3 l3">
                                    <div class="time-date">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social/single/time.png"/>
                                    </div>
                                    <div class="date-single">
                                        <?php the_time('d/m G:i'); ?>
                                    </div>
                                </div>
                                <div class="col s6 m3 l3">
                                    <div class="row right ajuste-img-social-mobile">
                                        <div class="col s4 facebook-single">
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
                                <div class="col s12 m6 l6"></div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>

                    <div class="content-single">
                        <?php the_content(); ?>
                    </div>

                    <div class="line"></div>
                    <br/>

                    <div class="facebook hide-on-med-and-down">
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1&appId=1719551754798065&autoLogAppEvents=1';
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="1"></div>
                    </div>

                    <div class="line hide-on-med-and-down"></div>

                    <div class="pub-private-single">

                        <div class="row hide-on-med-and-down">
                            <br/>
                            <div class="title-pub-private-single center">
                                *Publicidade
                            </div>
                            <div class="col s5">
                                <div data-premium data-adunit="CEARA_NEWS_DESKTOP_INTERNA_LATERAL_1" data-sizes="[[300,250]]" data-device="desktop">
                                </div>
                            </div>
                            <div class="col s1"></div>
                            <div class="col s5">
                                <div data-premium data-adunit="CEARA_NEWS_DESKTOP_INTERNA_LATERAL_2" data-sizes="[[300,250]]" data-device="desktop">
                                </div>
                            </div>
                        </div>
                        <div class="line hide-on-med-and-down"></div>

                        <br/>
                        <!--Anúncio Caucaia -->
                        <div class="title-pub-private-single center">
                            Publicidade
                        </div>
                        <a href="https://www.caucaia.ce.gov.br" target="_blank" class="hide-on-med-and-down">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pub/caucaia-single01.png" width="100%" title="Prefeitura de Caucaia">
                        </a>
                        <a href="https://www.caucaia.ce.gov.br" target="_blank" class="hide-on-med-and-up">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pub/caucaia-mobile2.png" width="100%" title="Prefeitura de Caucaia">
                        </a>
                        <br/>
                        <div class="line hide-on-med-and-down"></div>
                        <br/>

                    </div>

                </div>

                <div class="col s12 m4 l4">
                    <div class="center pub-single-private hide-on-med-and-down">
                        <div class="title-publicidade center">
                            *Publicidade
                        </div>
                        <a href="https://www.caucaia.ce.gov.br" target="_blank">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pub/caucaia-single02.png" width="100%" title="Prefeitura de Caucaia">
                        </a>
                    </div>
                    <div class="line"></div>
                    <br/>
                    <div class="title-publicidade center">
                        Publicidade
                    </div>
                    <div class="hide-on-med-and-up">
                        <div data-premium data-adunit="CEARA_NEWS_MOBILE_INTERNA_3" data-sizes="[[300,250]]" data-device="mobile">
                        </div>
                        <br/>
                    </div>
                    <div class="pub-politica hide-on-med-and-down">
                        <!-- Bloco 01 Premmium -->
                        <div data-premium data-adunit="CEARA_NEWS_DESKTOP_INTERNA_LATERAL_2" data-sizes="[[300,600]]" data-device="desktop">
                        </div>
                    </div>
                    <div class="line"></div>
                    <br/>
                    <div class="row">
                        <div class="col s6 m6 l6">
                            <div class="mais-destaque">
                                Mais Lidas de Hoje
                            </div>
                        </div>
                        <div class="col s6 m6 l6">
                            <div class="border-mais-lidas-single"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="row">
                            <div class="col s2">
                                <div class="date-single">
                                    <?php
                                        for($i = 1; $i <= 5; $i++){
                                            $result = $i;
                                            echo "<h3 class='number-single'>$result</h3>";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="col s10">
                                <?php
                                    $args = array(
                                        'range' => 'last24hours',
                                        'limit' => 5
                                    );
                                ?>
                                <div class="title-mais-lidas-single padding-ajustes">
                                    <?php
                                    wpp_get_mostpopular( $args );
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>

                    <div class="hide-on-med-and-up">
                        <div class="title-publicidade center">
                            *Publicidade
                        </div>
                        <div data-premium data-adunit="CEARA_NEWS_MOBILE_INTERNA_3" data-sizes="[[300,250]]" data-device="mobile">
                        </div>
                        <br/>
                        <div class="line"></div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col s12 m3 l3">
                    <div class="btn-large single">
                        Leia Também
                    </div>
                </div>
                <div class="col s12 m9 l9"></div>
            </div>
            <div class="row">
            <?php
            $categories = get_the_category($post->ID);
            if ($categories) {  $category_ids = array();
                foreach($categories as $individual_category)
                    $category_ids[] = $individual_category->term_id;
                $args=array(
                    'category__in' => $category_ids,
                    'post__not_in' => array($post->ID),
                    'showposts'=>3,
                    'caller_get_posts'=>1
                );
                $my_query = new WP_Query($args);
                if($my_query->have_posts() ) {
                    $count=1;
                    while ($my_query->have_posts()) {
                        $my_query->the_post(); ?>

                            <div class="col s12 m4 l4">
                                <div class="row">
                                    <div class="col s4">
                                        <a href="<?php the_permalink();?>">
                                            <?php
                                                if (has_post_thumbnail()) {
                                                    the_post_thumbnail('thumbnail');
                                                }
                                            ?>
                                        </a>
                                    </div>
                                    <div class="col s8">
                                        <div class="retranca-destaque-right">
                                            <?php
                                                $cartola = get_field( "cartola" );
                                                if( $cartola ){
                                                    echo $cartola;
                                                }else{
                                                    echo ' ';
                                                }
                                            ?>
                                        </div>
                                        <div class="tittle-leia-tambem">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $count ++; ?>
                    <?php }
                    wp_reset_query();
                }
            }
            ?>
            </div>

            <div class="line"></div>
            <br/>

            <div class="row">
                <div class="col s12 m3 l3">
                    <div class="btn-large single">
                        Links Patrocinados
                    </div>
                </div>
                <div class="col s12 m9 l9"></div>
                <div class="col s12">
                    <br/>
                    *Links Patrocinado
                </div>
            </div>
        </div>
    <?php
        endif;
    ?>
    </div>
</div>

<?php get_footer();?>