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
    $the_query = new WP_Query(array(
        'category_name' => 'tudo',
        'posts_per_page' => 6,
        'order' => 'DESC',
        'orderBy' => 'ID'
    ));
    while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
    wp_reset_postdata();
    ?>
</div>
<br/>
