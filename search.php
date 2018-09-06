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
            <div class="description-search">
                Resultado Por: <strong><?php echo get_search_query();?></strong>
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
                <div class="col s12">
                    <div class="date-single">
                        <?= the_time('d/m G:i'); ?>
                    </div>
                    <div class="title-category">
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
                </div>
            </div>
            <div class="line-category"></div>
            <br/>
            <?php
                endwhile;
            else:
                echo "<strong><br />
                        <h4>Não existe conteúdo para a sua pesquisa.</h4>
                    <p></strong>";
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
            <div data-premium data-adunit="CEARA_NEWS_DESKTOP_HOME_2" data-sizes="[[300,250]]" data-device="desktop">
            </div>
            <br/>
            <div data-premium data-adunit="CEARA_NEWS_DESKTOP_HOME_2" data-sizes="[[300,250]]" data-device="desktop">
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
