<div class="row">
    <div class="col s12 m5 l5">
        <div class="float-mais-destaques">
            <div class="row">
                <div class="col s6 l6">
                    <div class="mais-destaque">
                        Mais Destaques
                    </div>
                </div>
                <div class="col s6 l6">
                    <div class="border-mais-destaques"></div>
                </div>
            </div>
            <div class="ajuste-card-mobile"></div>
            <?php
                $query = new WP_Query( array(
                    'posts_per_page' => 3,
                    'category_name' => 'mais-destaques',
                    'order' => 'DESC',
                    'orderBy' => 'ID'
                ));
            ?>
            <?php
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            ?>
                <div class="row">
                    <div class="card">
                        <div class="card-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('custom-size');
                                    }
                                ?>
                            </a>
                            <div class="card-container">
                                <div class="row">
                                    <div class="btn-small bigode-mais-destaques">
                                        <?php
                                            $cartola = get_field( "cartola" );
                                            if( $cartola ){
                                                echo $cartola;
                                            }else{
                                                echo ' ';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="card-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
            else : ?>
                <p><?php _e('Aguardando Publicações.'); ?></p>
            <?php endif;
            wp_reset_postdata();?>

        </div>
        <div class="line"></div>
    </div>
    <div class="col s12 m7 l7">
        <div class="float-mais-destaques-right">
            <div class="row float-mais-principal-mobile-right">
                <div class="col s12 m6 l6">
                    <?php
                        $query = new WP_Query( array(
                            'posts_per_page' => 3,
                            'category_name' => 'mais-destaques-right',
                            'order' => 'DESC',
                            'orderBy' => 'ID'
                        ));
                        ?>
                    <?php
                        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="retranca-destaque-right padding-ajustes">
                            <?php
                                $cartola = get_field( "cartola" );
                                if( $cartola ){
                                    echo $cartola;
                                }else{
                                    echo ' ';
                                }
                            ?>
                        </div>
                        <div class="tittle-mais-destaque-right">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                        <br/>

                    <?php
                        endwhile;
                    else : ?>
                        <p><?php _e('Aguardando Publicações.'); ?></p>
                    <?php endif;
                    wp_reset_postdata();?>

                    <div class="line"></div>
                    <br/>

                    <div class="row brasilia">
                        <div class="col s6 l6">
                            <div class="mais-destaque">
                                Conexão Brasília
                            </div>
                        </div>
                        <div class="col s6 l6">
                            <div class="border-mais-destaques"></div>
                        </div>
                        <iframe width="99%" height="300" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/179576144&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false">
                        </iframe>
                    </div>
                    <!--<div class="line"></div>-->

                </div>

                <div class="col s12 m6 l6">

                    <div class="row center hide-on-med-and-down">
                        <div class="title-publicidade">
                            Publicidade
                        </div>
                        <div class="publicidade-quadrada-extra"></div>
                        <div class="line"></div>
                    </div>

                    <div class="row center hide-on-med-and-up float-mais-principal-mobile">
                        <div class="title-publicidade">
                            Publicidade
                        </div>
                        <div class="publicidade-quadrada"></div>
                    </div>
                    <div class="line hide-on-med-and-up"></div>

                    <div class="row brasilia">
                        <div class="col s5 l6">
                            <div class="mais-destaque">
                                Plantão Plus
                            </div>
                        </div>
                        <div class="col s7 l6">
                            <div class="border-mais-destaques"></div>
                        </div>
                        <!--<iframe width="99%" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/179576144&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false">
                        </iframe>-->
                    </div>
                    <!--<div class="line"></div>-->

                </div>
            </div>
        </div>
    </div>
</div>