<?php get_header();?>

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
                    'orderBy' => 'ID'
                ));
            ?>
            <?php
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            ?>
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
                        <div class="time-date time-date-category">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social/single/time.png"/>
                        </div>
                        <div class="date-single">
                            <?php the_time('d/m G:i'); ?>
                        </div>
                        <div class="title-category ajuste-ultimas">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
            else : ?>
                <p><?php _e('Aguardando Publicações.'); ?></p>
            <?php endif;
            wp_reset_postdata();?>

            <div class="center">
                <?php wordpress_pagination(); ?>
            </div>

            <div class="line-category"></div>
            <br/>
            <!--<ul class="pagination center">
                <li class="disabled"><a href="javascript:void(null)"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="javascript:void(null)">1</a></li>
                <li class="waves-effect"><a href="javascript:void(null)">2</a></li>
                <li class="waves-effect"><a href="javascript:void(null)">3</a></li>
                <li class="waves-effect"><a href="javascript:void(null)">4</a></li>
                <li class="waves-effect"><a href="javascript:void(null)">5</a></li>
                <li class="waves-effect"><a href="javascript:void(null)"><i class="material-icons">chevron_right</i></a></li>
            </ul>-->
        </div>
        <div class="col s12 m4 l4">
            <div class="title-publicidade center">
                Publicidade
            </div>
            <div class="pub-category"></div>
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

