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
    <div class="row float-category">
        <div class="col s12">
            <div class="description-category">
                Últimas Notícias
            </div>
        </div>
    </div>
    <div class="row float-category">
        <div class="col s12 m8 l8">

            <?php
                $query = new WP_Query( array(
                    'posts_per_page' => 20,
                    'order' => 'DESC',
                    'orderBy' => 'ID',
                    'monthnum' => date( 'm')
                ));
            ?>

            <?php
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            ?>

            <?php
                $cat = array(
                    'donizete-arruda' => 13,
                    'fernando-ribeiro' => 15,
                    'pastor-jecer-goes' => 39,
                    'madson-vagner' => 44,
                    'raphael-barros' => 16,
                    'roberto-pires' => 40,
                );
                $categories = get_the_category();
                $result = $categories[0]->term_id;
            if(in_array($result,$cat)){
                echo '';
            }else{?>
                <div class="row category">
                    <div class="col s12 m4 l4">
                        <a href="<?php the_permalink();?>">
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
                }
            ?>

            <?php
                endwhile;
            else : ?>
                <p><?php _e('Aguardando Publicações.'); ?></p>
            <?php endif;
            wp_reset_postdata();?>

            <div class="center">
                <?php
                    if(wordpress_pagination()){
                ?>
                <?php wordpress_pagination(); ?>
                    <div class="line-category"></div>
                    <br/>
                <?php
                    }
                ?>
            </div>
        </div>
        <div class="col s12 m4 l4">

            <div class="row">
                <div class="col s12 m1 l1"></div>
                <div class="col s12 m10 l10">
                    <div class="homicidometro center">
                        <div class="title-homicidometro">
                            Homicidômetro
                        </div>
                        <div class="subtitle-homicidometro">
                            Mortes no Estado do ceará
                        </div>
                        <?php
                            $recent_posts = wp_get_recent_posts(array('post_type'=>'homicidios', 'numberposts' => 1, 'order' => 'DESC'));
                            foreach( $recent_posts as $recent ){

                                $excerpt = $recent["post_excerpt"];

                                $str = $excerpt;
                                $arr1 = str_split($str);
                            }
                        ?>
                        <div class="bloco">
                            <a class="waves-effect waves-light btn btn-large grey darken-4">
                                <?php print_r($arr1[0]); ?>
                            </a>
                            <a class="waves-effect waves-light btn btn-large grey darken-4">
                                <?php print_r($arr1[1]); ?>
                            </a>
                            <a class="waves-effect waves-light btn btn-large grey darken-4">
                                <?php print_r($arr1[2]); ?>
                            </a>
                            <a class="waves-effect waves-light btn btn-large grey darken-4">
                                <?php print_r($arr1[3]); ?>
                            </a>
                        </div>
                        <div class="date-homicidometro">
                            De 01/01/<?= date('Y'); ?> até <?= date('d/m/Y') ;?>
                        </div>
                    </div>
                </div>
            </div>

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

