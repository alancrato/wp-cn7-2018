<div class="row">
    <div class="col s4 m2 l2">
        <div class="tudo">
            De Tudo
        </div>
    </div>
    <div class="col s8 m10 l10">
        <div class="border-tudo"></div>
    </div>
</div>

<div class="row">
    <?php
    $query = new WP_Query( array(
        'posts_per_page' => 6,
        'category_name' => 'tudo',
        'order' => 'DESC',
        'orderBy' => 'ID'
    ));
    ?>
    <?php
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
    ?>
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
                    <div class="tittle-destaque-right padding-ajustes">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
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
<br/>
