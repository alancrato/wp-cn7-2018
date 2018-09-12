<div class="row">
    <div class="col s12 m12 l12">
        <div class="row">
            <div class="col s3 m2 l2">
                <div class="politica">
                    Política
                </div>
            </div>
            <div class="col s9 m10 l10">
                <div class="border-politica"></div>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4">
        <?php
        $the_query = new WP_Query(array(
            'category_name' => 'politica',
            'posts_per_page' => '1',
            'order' => 'DESC',
            'orderBy' => 'ID'
        ));
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="<?php the_permalink();?>">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('custom-size');
                }
                ?>
            </a>
            <div class="title-destaque padding-ajustes">
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
        wp_reset_postdata();
        ?>
    </div>

    <div class="col s12 m8 l8">
        <div class="row">
            <div class="col s12 m6 l6">
                <?php
                $the_query = new WP_Query(array(
                    'category_name' => 'politica',
                    'posts_per_page' => 3,
                    'offset' => 1,
                    'order' => 'DESC',
                    'orderBy' => 'ID'
                ));
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                            <div class="title-politica-right">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
                <div class="hide-on-med-and-up">
                    <div class="line"></div>
                    <br/>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <?php
                $the_query = new WP_Query(array(
                    'category_name' => 'politica',
                    'posts_per_page' => 3,
                    'offset' => 4,
                    'order' => 'DESC',
                    'orderBy' => 'ID'
                ));
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>