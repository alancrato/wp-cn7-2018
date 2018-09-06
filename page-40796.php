<?php get_header();?>

    <div class="submenu-nav hide-on-med-and-up">
        <div class="container">
            <div class="row">
                <div class="col s4">
                    <a href="<?php echo home_url('/');?>">
                        Destaques
                    </a>
                </div>
                <div class="col s4">
                    <a href="<?php echo home_url('/');?>mais-lidas">
                        Mais Lidas
                    </a>
                </div>
                <div class="col s4">
                    <a class="active" href="<?php echo home_url('/');?>colunas">
                        Colunas
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br/>

    <div class="row colunas">

        <div class="col s12 center ajuste-colunas-page-mobile">
            <div class="row">
                <a href="<?php echo home_url('/');?>categoria/coluna/donizete-arruda">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_01@2x.png"/>
                </a>
            </div>
            <div class="btn-small btn-small-ajuste-page-mobile">
                Donizete Arruda
            </div>
            <div class="title-coluna-page-mobile">
                <?php
                $query = new WP_Query( array(
                    'posts_per_page' => 1,
                    'category_name' => 'donizete-arruda',
                    'order' => 'DESC',
                    'orderBy' => 'ID'
                ));

                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                    ?>
                    <a href="<?php echo home_url('/');?>categoria/coluna/donizete-arruda">
                        <?php the_title(); ?>
                    </a>
                    <?php
                endwhile;
                else :
                    _e('Aguardando Publicações.');
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>

        <div class="col s12 center ajuste-colunas-page-mobile">
            <div class="row">
                <a href="<?php echo home_url('/');?>categoria/coluna/fernando-ribeiro">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_02@2x.png"/>
                </a>
            </div>
            <div class="btn-small btn-small-ajuste-page-mobile">
                Fernando Ribeiro
            </div>
            <div class="title-coluna-page-mobile">
                <?php
                $query = new WP_Query( array(
                    'posts_per_page' => 1,
                    'category_name' => 'fernando-ribeiro',
                    'order' => 'DESC',
                    'orderBy' => 'ID'
                ));

                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                    ?>
                    <a href="<?php echo home_url('/');?>categoria/coluna/fernando-ribeiro">
                        <?php the_title(); ?>
                    </a>
                    <?php
                endwhile;
                else :
                    _e('Aguardando Publicações.');
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="col s12 center ajuste-colunas-page-mobile">
            <div class="row">
                <a href="<?php echo home_url('/');?>categoria/coluna/pastor-jecer-goes">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_03@2x.png"/>
                </a>
            </div>
            <div class="btn-small btn-small-ajuste-page-mobile">
                Pastor Jecer Goes
            </div>
            <div class="title-coluna-page-mobile">
                <?php
                $query = new WP_Query( array(
                    'posts_per_page' => 1,
                    'category_name' => 'pastor-jecer-goes',
                    'order' => 'DESC',
                    'orderBy' => 'ID'
                ));

                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                    ?>
                    <a href="<?php echo home_url('/');?>categoria/coluna/pastor-jecer-goes">
                        <?php the_title(); ?>
                    </a>
                    <?php
                endwhile;
                else :
                    _e('Aguardando Publicações.');
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="col s12 center ajuste-colunas-page-mobile">
            <div class="row">
                <a href="<?php echo home_url('/');?>categoria/coluna/madson-vagner">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_04@2x.png"/>
                </a>
            </div>
            <div class="btn-small btn-small-ajuste-page-mobile">
                Madson Vagner
            </div>
            <div class="title-coluna-page-mobile">
                <?php
                $query = new WP_Query( array(
                    'posts_per_page' => 1,
                    'category_name' => 'madson-vagner',
                    'order' => 'DESC',
                    'orderBy' => 'ID'
                ));
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                    ?>
                    <a href="<?php echo home_url('/');?>categoria/coluna/madson-vagner">
                        <?php the_title(); ?>
                    </a>
                    <?php
                endwhile;
                else :
                    _e('Aguardando Publicações.');
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="col s12 center ajuste-colunas-page-mobile">
            <div class="row">
                <a href="<?php echo home_url('/');?>categoria/coluna/raphael-barros">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_05@2x.png"/>
                </a>
            </div>
            <div class="btn-small btn-small-ajuste-page-mobile">
                Raphael Barros
            </div>
            <div class="title-coluna-page-mobile">
                <?php
                $query = new WP_Query( array(
                    'posts_per_page' => 1,
                    'category_name' => 'raphael-barros',
                    'order' => 'DESC',
                    'orderBy' => 'ID'
                ));
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                    ?>
                    <a href="<?php echo home_url('/');?>categoria/coluna/raphael-barros">
                        <?php the_title(); ?>
                    </a>
                    <?php
                endwhile;
                else :
                    _e('Aguardando Publicações.');
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="col s12 center ajuste-colunas-page-mobile">
            <div class="row">
                <a href="<?php echo home_url('/');?>categoria/coluna/roberto-pires">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_06@2x.png"/>
                </a>
            </div>
            <div class="btn-small btn-small-ajuste-page-mobile">
                Roberto Pires
            </div>
            <div class="title-coluna-page-mobile">
                <?php
                $query = new WP_Query( array(
                    'posts_per_page' => 1,
                    'category_name' => 'roberto-pires',
                    'order' => 'DESC',
                    'orderBy' => 'ID'
                ));
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                    ?>
                    <a href="<?php echo home_url('/');?>categoria/coluna/roberto-pires">
                        <?php the_title(); ?>
                    </a>
                    <?php
                endwhile;
                else :
                    _e('Aguardando Publicações.');
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="line-sidebar-category"></div>
            <br/>
            <div class="title-publicidade center">
                Publicidade
            </div>
            <!-- Bloco 01 Premmium -->
            <div data-premium data-adunit="CEARA_NEWS_MOBILE_HOME_3" data-sizes="[[300,250]]" data-device="mobile">
            </div>
            <br/>
            <div class="line-sidebar-category"></div>
            <br/>
        </div>
    </div>

<?php get_footer();?>