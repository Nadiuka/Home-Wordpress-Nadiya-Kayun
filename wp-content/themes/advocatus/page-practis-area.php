<?php

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <section class="practis-area">
                <div class="container">
                    <div class="order">
                        <div class="order-main">
                            <h2><?php echo get_theme_mod('HeaderPractis'); ?></h2>
                            <p class="text-order"><?php echo get_theme_mod('TextPractis'); ?></p>
                        </div>
                        <div class="number">02</div>
                    </div>
                    <ul class="practis clearfix">
                        <?php
                        $args = [
                            'post_type' => 'practis'
                        ];
                        query_posts($args);
                        while (have_posts()) : the_post();

                            get_template_part('template-parts/content', 'practis');

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