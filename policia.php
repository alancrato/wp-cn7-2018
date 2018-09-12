<div class="row">
    <div class="col s12 m12 l12">
        <div class="row ajuste-card-mobile-policia">
            <div class="col s3 m2 l2">
                <div class="politica">
                    Polícia
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
            'category_name' => 'policia',
            'posts_per_page' => 1,
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
        wp_reset_postdata();
        ?>
    </div>
    <div class="col s12 m8 l8">
        <div class="row">
            <div class="col s12 m6 l6">

                <?php
                $the_query = new WP_Query(array(
                    'category_name' => 'policia',
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
                            <div class="title-politica">
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
                <div class="homicidometro center">
                    <div class="title-homicidometro">
                        Homicidômetro
                    </div>
                    <div class="subtitle-homicidometro">
                        Mortes no Estado do ceará
                    </div>
                    <?php
                        $recent_posts = wp_get_recent_posts(array('post_type'=>'homicidios', 'numberposts' => 1, 'order' => 'DESC'));
                        foreach( $recent_posts as $recent ){

                            $excerpt = $recent["post_excerpt"];

                            $str = $excerpt;
                            $arr1 = str_split($str);
                        }
                    ?>
                    <div class="bloco">
                        <a class="waves-effect waves-light btn btn-large grey darken-4">
                            <?php print_r($arr1[0]); ?>
                        </a>
                        <a class="waves-effect waves-light btn btn-large grey darken-4">
                            <?php print_r($arr1[1]); ?>
                        </a>
                        <a class="waves-effect waves-light btn btn-large grey darken-4">
                            <?php print_r($arr1[2]); ?>
                        </a>
                        <a class="waves-effect waves-light btn btn-large grey darken-4">
                            <?php print_r($arr1[3]); ?>
                        </a>
                    </div>
                    <div class="date-homicidometro">
                        De 01/01/<?= date('Y'); ?> até <?= date('d/m/Y') ;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="line"></div>