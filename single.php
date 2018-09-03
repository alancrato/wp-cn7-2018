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
                        <?php
                            echo "<blockquote>";
                                echo get_post(get_post_thumbnail_id())->post_excerpt;
                            echo "</blockquote>";
                        ?>
                        <div class="line"></div>
                    </div>
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
                        <br/>
                        <!--Anúncio Caucaia -->
                        <div class="title-pub-private-single">
                            Publicidade
                        </div>
                        <a href="https://www.caucaia.ce.gov.br" target="_blank" class="hide-on-med-and-down">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pub/caucaia-single01.png" width="100%" title="Prefeitura de Caucaia">
                        </a>
                        <a href="https://www.caucaia.ce.gov.br" target="_blank" class="hide-on-med-and-up">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pub/caucaia-mobile2.png" width="100%" title="Prefeitura de Caucaia">
                        </a>
                        <div class="line"></div>
                        <br/>
                    </div>

                </div>

                <div class="col s12 m4 l4">
                    <div class="title-publicidade">
                        Publicidade
                    </div>
                    <div class="pub-politica hide-on-med-and-down"></div>
                    <div class="publicidade-quadrada-politica hide-on-med-and-up"></div>
                    <br/>
                    <div class="line"></div>
                    <br/>
                    <div class="row">
                        <div class="col s6 l6">
                            <div class="mais-destaque">
                                Mais Lidas
                            </div>
                        </div>
                        <div class="col s6 l6">
                            <div class="border-mais-destaques"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <div class="retranca-destaque-right">
                                Fato ou Fake?
                            </div>
                            <div class="tittle-destaque-right">
                                Ciro Gomes vende imagem de machão e afirma não andar com seguranças em Fortaleza
                            </div>
                            <br/>

                            <div class="retranca-destaque-right">
                                Fato ou Fake?
                            </div>
                            <div class="tittle-destaque-right">
                                Ciro Gomes vende imagem de machão e afirma não andar com seguranças em Fortaleza
                            </div>
                            <br/>

                            <div class="retranca-destaque-right">
                                Fato ou Fake?
                            </div>
                            <div class="tittle-destaque-right">
                                Ciro Gomes vende imagem de machão e afirma não andar com seguranças em Fortaleza
                            </div>
                            <br/>

                            <div class="retranca-destaque-right">
                                Fato ou Fake?
                            </div>
                            <div class="tittle-destaque-right">
                                Ciro Gomes vende imagem de machão e afirma não andar com seguranças em Fortaleza
                            </div>
                            <br/>

                            <div class="retranca-destaque-right">
                                Fato ou Fake?
                            </div>
                            <div class="tittle-destaque-right">
                                Ciro Gomes vende imagem de machão e afirma não andar com seguranças em Fortaleza
                            </div>
                            <div class="line"></div>
                            <br/>
                        </div>
                    </div>

                    <div class="title-publicidade">
                        Publicidade
                    </div>
                    <div class="publicidade-quadrada-politica"></div>
                    <div class="line"></div>
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
                <div class="col s12 m4 l4">
                    <?php
                    for($i = 1; $i <=2; $i++){;
                        ?>
                        <div class="row">
                            <div class="col s4">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cards/home_04.png"/>
                            </div>
                            <div class="col s8">
                                <div class="retranca-destaque-right">
                                    Fato ou Fake?
                                </div>
                                <div class="tittle-leia-tambem">
                                    Ciro Gomes vende imagem de machão e afirma não andar com seguranças em Fortaleza
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="col s12 m4 l4">
                    <?php
                    for($i = 1; $i <=2; $i++){;
                        ?>
                        <div class="row">
                            <div class="col s4">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cards/home_04.png"/>
                            </div>
                            <div class="col s8">
                                <div class="retranca-destaque-right">
                                    Fato ou Fake?
                                </div>
                                <div class="tittle-leia-tambem">
                                    Ciro Gomes vende imagem de machão e afirma não andar com seguranças em Fortaleza
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="col s12 m4 l4">
                    <?php
                    for($i = 1; $i <=2; $i++){;
                        ?>
                        <div class="row">
                            <div class="col s4">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cards/home_04.png"/>
                            </div>
                            <div class="col s8">
                                <div class="retranca-destaque-right">
                                    Fato ou Fake?
                                </div>
                                <div class="tittle-leia-tambem">
                                    Ciro Gomes vende imagem de machão e afirma não andar com seguranças em Fortaleza
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
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