<div class="col s12 m6 l6">
    <div class="row ajuste-card-interior">
        <div class="col s3">
            <div class="politica">
                Interior
            </div>
        </div>
        <div class="col s9">
            <div class="border-interior"></div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="row">
                <div class="col s12 m6 l6">
                    <?php
                    $query = new WP_Query( array(
                        'posts_per_page' => 1,
                        'category_name' => 'politica',
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
                        <div class="title-destaque">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                        <div class="bigode-destaque">
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
                    <div class="hide-on-med-and-up">
                        <div class="line"></div>
                        <br/>
                    </div>
                </div>
                <div class="col s12 m6 l6">
                    <?php
                        $query = new WP_Query( array(
                            'posts_per_page' => 3,
                            'offset' => 1,
                            'category_name' => 'politica',
                            'order' => 'DESC',
                            'orderBy' => 'ID'
                        ));
                    ?>
                    <?php
                        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                    ?>
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
                        <div class="tittle-destaque-right padding-ajustes">
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

                </div>
            </div>
            <div class="line"></div>
        </div>
    </div>
</div>
<div class="col s12 m6 l6">
    <div class="row">
        <div class="col s3">
            <div class="politica">
                Esportes
            </div>
        </div>
        <div class="col s9">
            <div class="border-interior"></div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="row">
                <div class="col s12 m6 l6">
                    <?php
                        $query = new WP_Query( array(
                            'posts_per_page' => 1,
                            'category_name' => 'policia',
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
                        <div class="title-destaque">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                        <div class="bigode-destaque">
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
                    <div class="hide-on-med-and-up">
                        <div class="line"></div>
                        <br/>
                    </div>
                </div>
                <div class="col s12 m6 l6">
                    <?php
                    $query = new WP_Query( array(
                        'posts_per_page' => 3,
                        'offset' => 1,
                        'category_name' => 'policia',
                        'order' => 'DESC',
                        'orderBy' => 'ID'
                    ));
                    ?>
                    <?php
                    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                        ?>
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
                        <div class="tittle-destaque-right padding-ajustes">
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
                </div>
            </div>
            <div class="line"></div>
        </div>
    </div>
</div>