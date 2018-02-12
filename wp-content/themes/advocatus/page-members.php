<?php

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <section class="our-attorney">
                <div class="container">
                    <div class="order">
                        <div class="order-main">
                            <h2><?php echo get_theme_mod('HeaderAttorney'); ?></h2>
                            <p class="text-order"><?php echo get_theme_mod('TextAttorney'); ?></p>
                        </div>
                        <div class="number">03</div>
                    </div>
                    <ul class="attorney clearfix">
                        <?php
                        $args = [
                            'post_type' => 'members',
                            'orderby' => 'date',
                            'order' => 'ASC',
                        ];
                        query_posts($args);
                        while (have_posts()) : the_post();

                            get_template_part('template-parts/content', 'members');

                        endwhile;
                        wp_reset_query();
                        ?>
                    </ul>
                </div>
            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();