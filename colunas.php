<div class="row colunas">

    <div class="col s12 m2 l2 center">
        <a href="<?php echo home_url('/');?>categoria/coluna/donizete-arruda">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_01@2x.png"/>
        </a>
        <div class="btn-small">
            Donizete Arruda
        </div>
        <div class="title-coluna">

            <?php
            $the_query = new WP_Query(array(
                'category_name' => 'donizete-arruda',
                'posts_per_page' => '1',
                'order' => 'DESC',
                'orderBy' => 'ID'
            ));
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php echo home_url('/');?>categoria/coluna/donizete-arruda">
                    <?php the_title(); ?>
                </a>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
    </div>

    <div class="col s12 m2 l2 center">
        <a href="<?php echo home_url('/');?>categoria/coluna/fernando-ribeiro">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_02@2x.png"/>
        </a>
        <div class="btn-small">
            Fernando Ribeiro
        </div>
        <div class="title-coluna">
            <?php
            $the_query = new WP_Query(array(
                'category_name' => 'fernando-ribeiro',
                'posts_per_page' => '1',
                'order' => 'DESC',
                'orderBy' => 'ID'
            ));
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php echo home_url('/');?>categoria/coluna/fernando-ribeiro">
                    <?php the_title(); ?>
                </a>
            <?php
                endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="col s12 m2 l2 center">
        <a href="<?php echo home_url('/');?>categoria/coluna/pastor-jecer-goes">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_03@2x.png"/>
        </a>
        <div class="btn-small">
            Pastor Jecer Goes
        </div>
        <div class="title-coluna">

            <?php
            $the_query = new WP_Query(array(
                'category_name' => 'pastor-jecer-goes',
                'posts_per_page' => '1',
                'order' => 'DESC',
                'orderBy' => 'ID'
            ));
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php echo home_url('/');?>categoria/coluna/pastor-jecer-goes">
                    <?php the_title(); ?>
                </a>
            <?php
                endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="col s12 m2 l2 center">
        <a href="<?php echo home_url('/');?>categoria/coluna/madson-vagner">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_04@2x.png"/>
        </a>
        <div class="btn-small">
            Madson Vagner
        </div>
        <div class="title-coluna">
            <?php
            $the_query = new WP_Query(array(
                'category_name' => 'madson-vagner',
                'posts_per_page' => '1',
                'order' => 'DESC',
                'orderBy' => 'ID'
            ));
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php echo home_url('/');?>categoria/coluna/madson-vagner">
                    <?php the_title(); ?>
                </a>
            <?php
                endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="col s12 m2 l2 center">
        <a href="<?php echo home_url('/');?>categoria/coluna/raphael-barros">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_05@2x.png"/>
        </a>
        <div class="btn-small">
            Raphael Barros
        </div>
        <div class="title-coluna">
            <?php
            $the_query = new WP_Query(array(
                'category_name' => 'raphael-barros',
                'posts_per_page' => '1',
                'order' => 'DESC',
                'orderBy' => 'ID'
            ));
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php echo home_url('/');?>categoria/coluna/raphael-barros">
                    <?php the_title(); ?>
                </a>
            <?php
                endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="col s12 m2 l2 center">
        <a href="<?php echo home_url('/');?>categoria/coluna/roberto-pires">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/colunas/home_06@2x.png"/>
        </a>
        <div class="btn-small">
            Roberto Pires
        </div>
        <div class="title-coluna">
            <?php
            $the_query = new WP_Query(array(
                'category_name' => 'roberto-pires',
                'posts_per_page' => '1',
                'order' => 'DESC',
                'orderBy' => 'ID'
            ));
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php echo home_url('/');?>categoria/coluna/roberto-pires">
                    <?php the_title(); ?>
                </a>
            <?php
                endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>