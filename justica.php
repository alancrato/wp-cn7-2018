<div class="row">
    <div class="col s12 m12 l12">
        <div class="row">
            <div class="col s5 m5 l5">
                <div class="observatorio">
                    Observatório justiça
                </div>
            </div>
            <div class="col s7 m7 l7">
                <div class="border-observatorio"></div>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4">

        <?php
            $query = new WP_Query( array(
                'posts_per_page' => 1,
                'category_name' => 'observatorio-justica',
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
            <div class="hide-on-med-and-up">
                <div class="line"></div>
                <br/>
            </div>
        <?php
            endwhile;
        else : ?>
            <p><?php _e('Aguardando Publicações.'); ?></p>
        <?php endif;
        wp_reset_postdata();?>

    </div>
    <div class="col s12 m8 l8">
        <div class="row">
            <div class="col s12 m6 l6">
                <?php
                    $query = new WP_Query( array(
                        'posts_per_page' => 3,
                        'category_name' => 'observatorio-justica',
                        'order' => 'DESC',
                        'orderBy' => 'ID'
                    ));
                ?>
                <?php
                    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                ?>
                    <div class="row">
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
                            <div class="title-politica">
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
                <div class="hide-on-med-and-up">
                    <div class="line"></div>
                    <br/>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <?php
                    $query = new WP_Query( array(
                        'posts_per_page' => 3,
                        'category_name' => 'observatorio-justica',
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
                    <div class="tittle-destaque-right">
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
    </div>
</div>
<div class="line"></div>
<br/>