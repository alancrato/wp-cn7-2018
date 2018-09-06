<div class="row">
    <div class="col s12 m5 l5">
        <?php
        $query = new WP_Query( array(
            'posts_per_page' => 1,
            'category_name' => 'principal',
            'order' => 'DESC',
            'orderBy' => 'ID'
        ));
        ?>
        <?php
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
        ?>

            <div class="hide-on-med-and-down">
                <div class="btn-small">
                    <?php
                    $cartola = get_field( "cartola" );
                    if( $cartola ){
                        echo $cartola;
                    }else{
                        echo ' ';
                    }
                    ?>
                </div>
                <div class="title padding-ajustes">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </div>
                <div class="bigode">
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

            <div class="hide-on-med-and-up">
                <div class="card">
                    <div class="card-content">
                        <div class="btn-small">
                            <?php
                            $cartola = get_field( "cartola" );
                            if( $cartola ){
                                echo $cartola;
                            }else{
                                echo ' ';
                            }
                            ?>
                        </div>
                        <div class="title padding-ajustes">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                        <div class="bigode">
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
            </div>

        <?php
            endwhile;
        else : ?>
            <p><?php _e('Aguardando Publicações.'); ?></p>
        <?php endif;
        wp_reset_postdata();?>
        <div class="line"></div>
    </div>

    <div class="col s12 m7 l7">
        <div class="row center hide-on-med-and-up float-mais-principal-mobile">
            <div class="title-publicidade">
                Publicidade
            </div>
            <div class="gif-bnb-mobile">
                <a href="https://www.bnb.gov.br/simuladores" target="_blank">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pub/bnbMobile.gif"/>
                </a>
            </div>
            <br/>
            <div class="line-extra"></div>
        </div>
        <div class="row">
            <div class="col s12 m5 l5">

                <?php
                $query = new WP_Query( array(
                    'posts_per_page' => 1,
                    'category_name' => 'destaque-right-1',
                    'order' => 'DESC',
                    'orderBy' => 'ID'
                ));
                ?>
                <?php
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                ?>
                    <a href="<?php the_permalink();?>">
                        <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('custom-size');
                            }
                        ?>
                    </a>
                    <div class="btn-small padding-ajustes">
                        <?php
                        $cartola = get_field( "cartola" );
                            if( $cartola ){
                                echo $cartola;
                            }else{
                                echo ' ';
                            }
                        ?>
                    </div>
                    <div class="title-destaque">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <div class="bigode-destaque padding-ajustes">
                        <?php
                            $bigode = get_field( "bigode" );
                            if( $bigode ){
                                echo $bigode;
                            }else{
                                echo ' ';
                            }
                        ?>
                    </div>
                <?php
                    endwhile;
                else : ?>
                    <p><?php _e('Aguardando Publicações.'); ?></p>
                <?php endif;
                wp_reset_postdata();?>
                <div class="line"></div>
            </div>

            <div class="col s12 m7 l7">
                <div class="row float-mais-principal-mobile">
                    <div class="col s12 m12 l12">

                        <div class="row">
                            <?php
                            $query = new WP_Query( array(
                                'posts_per_page' => 1,
                                'category_name' => 'destaque-right-2',
                                'order' => 'DESC',
                                'orderBy' => 'ID'
                            ));
                            ?>
                            <?php
                            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                            ?>
                                <div class="col s4 m4 l4">
                                    <a href="<?php the_permalink();?>">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('thumbnail');
                                        }
                                        ?>
                                    </a>
                                </div>
                                <div class="col s8 m8 l8">
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
                                    <div class="tittle-destaque-right">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                </div>
                            <?php
                                endwhile;
                            else : ?>
                                <p><?php _e('Aguardando Publicações.'); ?></p>
                            <?php endif;
                            wp_reset_postdata();?>
                        </div>

                        <div class="row">
                            <?php
                            $query = new WP_Query( array(
                                'posts_per_page' => 1,
                                'category_name' => 'destaque-right-3',
                                'order' => 'DESC',
                                'orderBy' => 'ID'
                            ));
                            ?>
                            <?php
                            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                                ?>
                                <div class="col s4 m4 l4">
                                    <a href="<?php the_permalink();?>">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('thumbnail');
                                        }
                                        ?>
                                    </a>
                                </div>
                                <div class="col s8 m8 l8">
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
                                    <div class="tittle-destaque-right">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            else : ?>
                                <p><?php _e('Aguardando Publicações.'); ?></p>
                            <?php endif;
                            wp_reset_postdata();?>
                        </div>

                        <div class="row">
                            <?php
                            $query = new WP_Query( array(
                                'posts_per_page' => 1,
                                'category_name' => 'destaque-right-4',
                                'order' => 'DESC',
                                'orderBy' => 'ID'
                            ));
                            ?>
                            <?php
                            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                                ?>
                                <div class="col s4 m4 l4">
                                    <a href="<?php the_permalink();?>">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('thumbnail');
                                        }
                                        ?>
                                    </a>
                                </div>
                                <div class="col s8 m8 l8">
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
                                    <div class="tittle-destaque-right">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
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
                        <div class="row center hide-on-med-and-up float-mais-principal-mobile">
                            <div class="title-publicidade">
                                Publicidade
                            </div>
                            <div data-premium data-adunit="CEARA_NEWS_MOBILE_HOME_1" data-sizes="[[300,250]]" data-device="mobile">
                            </div>
                        </div>
                        <div class="line hide-on-med-and-up"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>